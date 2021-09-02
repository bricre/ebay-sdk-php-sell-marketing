<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\CreateReportTask as CreateReportTask;
use Ebay\Sell\Marketing\Model\ReportTask as ReportTask;
use Ebay\Sell\Marketing\Model\ReportTaskPagedCollection as ReportTaskPagedCollection;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class AdReportTask extends AbstractAPI
{
    /**
     * This method returns information on all the existing report tasks related to a
     * seller. Use the report_task_statuses query parameter to control which reports to
     * return. You can paginate the result set by specifying a limit, which dictates
     * how many report tasks to return on each page of the response. Use the offset
     * parameter to specify how many reports to skip in the result set before returning
     * the first result.
     *
     * @param array $queries options:
     *                       'limit'	string	Specifies the maximum number of report tasks to return on a page
     *                       in the paginated response. Default: 10 Maximum: 500
     *                       'offset'	string	Specifies the number of report tasks to skip in the result set
     *                       before returning the first report in the paginated response. Combine offset with
     *                       the limit query parameter to control the reports returned in the response. For
     *                       example, if you supply an offset of 0 and a limit of 10, the response contains
     *                       the first 10 reports from the complete list of report tasks retrieved by the
     *                       call. If offset is 10 and limit is 10, the first page of the response contains
     *                       reports 11-20 from the complete result set. Default: 0
     *                       'report_task_statuses'	string	This parameter filters the returned report tasks
     *                       by their status. Supply a comma-separated list of the report statuses you want
     *                       returned. The results are filtered to include only the report statuses you
     *                       specify. Note: The results might not include some report tasks if other search
     *                       conditions exclude them. Valid values: &nbsp;&nbsp;&nbsp;PENDING
     *                       &nbsp;&nbsp;&nbsp;SUCCESS &nbsp;&nbsp;&nbsp;FAILED
     *
     * @return ReportTaskPagedCollection
     */
    public function getReportTasks(array $queries = []): ReportTaskPagedCollection
    {
        return $this->client->request('getReportTasks', 'GET', 'ad_report_task',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method creates a report task, which generates a Promoted Listings report
     * based on the values specified in the call. The report is generated based on the
     * criteria you specify, including the report type, the report's dimensions and
     * metrics, the report's start and end dates, the listings to include in the
     * report, and more. Metrics are the quantitative measurements in the report while
     * dimensions specify the attributes of the data included in the reports. When
     * creating a report task, you can specify the items you want included in the
     * report. The items you specify, using either listingId or inventoryReference
     * values, must be in a Promoted Listings campaign for them to be included in the
     * report. For details on the required and optional fields for each report type,
     * see Creating Promoted Listings reports. This call returns the URL to the report
     * task in the Location response header, and the URL includes the report-task ID.
     * Reports often take time to generate and it's common for this call to return an
     * HTTP status of 202, which indicates the report is being generated. Call
     * getReportTasks (or getReportTask with the report-task ID) to determine the
     * status of a Promoted Listings report. When a report is complete, eBay sets its
     * status to SUCCESS and you can download it using the URL returned in the
     * reportHref field of the getReportTask call. Report files are tab-separated value
     * gzip files with a file extension of .tsv.gz. Note: This call fails if you don't
     * submit all the required fields for the specified report type. Fields not
     * supported by the specified report type are ignored. Call getReportMetadata to
     * retrieve a list of the fields you need to configure for each Promoted Listings
     * report type.
     *
     * @param CreateReportTask $Model the container for the fields that define the
     *                                report task
     *
     * @return mixed
     */
    public function createReportTask(CreateReportTask $Model)
    {
        return $this->client->request('createReportTask', 'POST', 'ad_report_task',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This call returns the details of a specific Promoted Listings report task, as
     * specified by the report_task_id path parameter. The report task includes the
     * report criteria (such as the report dimensions, metrics, and included listing)
     * and the report-generation rules (such as starting and ending dates for the
     * specified report task). Report-task IDs are generated by eBay when you call
     * createReportTask. Get a complete list of a seller's report-task IDs by calling
     * getReportTasks.
     *
     * @param string $report_task_id a unique eBay-assigned ID for the report task
     *                               that's generated when the report task is created by a call to createReportTask
     *
     * @return ReportTask
     */
    public function getReportTask(string $report_task_id): ReportTask
    {
        return $this->client->request('getReportTask', 'GET', "ad_report_task/{$report_task_id}",
            [
            ]
        );
    }

    /**
     * This call deletes the report task specified by the report_task_id path
     * parameter. This method also deletes any reports generated by the report task.
     * Report task IDs are generated by eBay when you call createReportTask. Get a
     * complete list of a seller's report-task IDs by calling getReportTasks.
     *
     * @param string $report_task_id a unique eBay-assigned ID for the report task
     *                               that's generated when the report task is created by a call to createReportTask
     *
     * @return mixed
     */
    public function deleteReportTask(string $report_task_id)
    {
        return $this->client->request('deleteReportTask', 'DELETE', "ad_report_task/{$report_task_id}",
            [
            ]
        );
    }
}
