<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. ${YEAR}
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Service;

use HipexPackApi\Client;
use HipexPackApi\Exception\ExceptionInterface;
use HipexPackApi\Exception\TimeoutException;
use HipexPackApi\Generated\Schema\Type\Checklist;
use HipexPackApi\Repository\ChecklistRepository;

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
     * Checklist constructor.
     * @param Client $client
     * @param ChecklistRepository $checklistRepository
     */
    public function __construct(Client $client, ChecklistRepository $checklistRepository)
    {
        $this->client = $client;
        $this->checklistRepository = $checklistRepository;
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
            if (time() - $startTime > $timeout) {
                break;
            }

            $checklist = $this->checklistRepository->findById($checklist->getId());
            if ($checklist->getFinished() !== null) {
                return $checklist;
            }

            sleep(2);
        } while (true);

        throw new TimeoutException(sprintf('Timeout %s exceeded', $timeout));
    }
}