<? include $_SERVER["DOCUMENT_ROOT"] . "/common/classes/WebBase.php" ;?>
<?
/*
 * Web process
 * add by cho
 * */
if(!class_exists("WebBoard")){
	class WebBoard extends  WebBase {
		
		function __construct($req) 
		{
			parent::__construct($req);
		}

		//
		function searchLog(){
		    $page = $this->req["page"];
		    $limit = $this->rowPerPage;
		    $search = $this->req["searchText"];

            $request = array("page" => $page, "limit" => $limit, "search" => $search);
            $actionUrl = "{$this->serverRoot}/web/logs";
            $retVal = $this->getData($actionUrl, $request);
            $list = json_decode($retVal)->data;

            return $list;
        }

        function instantResponse(){
		    $msg = $this->req["msg"];

		    $request = array("msg" => $msg);
		    $actionUrl = "{$this->serverRoot}/web/instant";
		    $retVal = $this->getData($actionUrl, $request);

		    return json_decode($retVal)->data;
        }
		
	}
}