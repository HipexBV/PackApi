<?php
/**
 * @author Robert Fokken <rfokken@emico.nl>
 * @copyright (c) Emico B.V. 2018
 */

namespace HipexPackApi\Service;

use HipexPackApi\Client;
use HipexPackApi\Exception\ExceptionInterface;
use HipexPackApi\Exception\TimeoutException;
use HipexPackApi\Generated\Schema\Type\Checklist;
use HipexPackApi\Repository\ChecklistRepository;
use Psr\Log\LoggerInterface;

class ChecklistService
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var ChecklistRepository $checklistRepository
     */
    private $checklistRepository;
    /**
     * @var LoggerInterface
     */
    private $log;

    /**
     * Checklist constructor.
     * @param Client $client
     * @param ChecklistRepository $checklistRepository
     */
    public function __construct(Client $client, ChecklistRepository $checklistRepository, LoggerInterface $log)
    {
        $this->client = $client;
        $this->checklistRepository = $checklistRepository;
        $this->log = $log;
    }

    /**
     * @param int $domainId
     * @param bool $waitForFinish
     * @param int $timeout
     * @return Checklist
     * @throws ExceptionInterface
     */
    public function start(int $domainId, bool $waitForFinish = false, int $timeout = 300): Checklist
    {
        /** @var Checklist $checklist */
        $checklist = $this->client->mutateChecklistStart($domainId);

        if (!$waitForFinish) {
            return $checklist;
        }

        $startTime = time();
        do {
            $timeElapsed = time() - $startTime;
            if ($timeElapsed > $timeout) {
                break;
            }

            $checklist = $this->checklistRepository->findById($checklist->getId());
            if ($checklist->getFinished() !== null) {
                return $checklist;
            }

            $this->log->debug(sprintf('[%s] Waiting for checklist to complete, timeout %s/%s.', __CLASS__, $timeElapsed, $timeout));
            sleep(2);
        } while (true);

        throw new TimeoutException(sprintf('Timeout %s exceeded', $timeout));
    }
}