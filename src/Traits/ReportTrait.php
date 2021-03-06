<?php namespace Ixudra\Toggl\Traits;


use stdClass;

trait ReportTrait {

    /**
     * Returns an overview of what users in the workspace are doing and have been doing
     *
     * @return  stdClass
     */
    public function dashboard()
    {
        return $this->sendGetMessage( 'https://www.toggl.com/api/v8/dashboard/'. $this->workspaceId );
    }

    /**
     * Returns the aggregated time entries data
     *
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function summary(array $data = array())
    {
        return $this->sendGetMessage( 'https://www.toggl.com/reports/api/v2/summary', $data );
    }

    /**
     * Returns at-a glance information for a single project
     *
     * @param   array       $data       Data payload that is to be sent with the request
     * @return  stdClass
     */
    public function projectReport($id, array $data = array())
    {
        $data[ 'project_id' ] = $id;

        return $this->sendGetMessage( 'https://www.toggl.com/reports/api/v2/project', $data );
    }

}