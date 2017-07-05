<?php namespace Jenssegers\Mongodb\Queue;

use Illuminate\Queue\Jobs\DatabaseJob;

class MongoJob extends DatabaseJob
{
    /**
     * Indicates if the job has been reserved.
     *
     * @return bool
     */
    public function isReserved()
    {
        return ! $this->reservedAt();
    }

    /**
     * @return \DateTime
     */
    public function reservedAt()
    {
        return $this->job->reserved_at;
    }
}
