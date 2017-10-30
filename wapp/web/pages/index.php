<? include $_SERVER["DOCUMENT_ROOT"] . "/common/classes/Web.php"; ?>
<? include $_SERVER["DOCUMENT_ROOT"] . "/common/classes/WebUser.php" ;?>
<? include $_SERVER["DOCUMENT_ROOT"] . "/common/classes/WebBoard.php" ;?>

<? include "navigator.php";?>
    <script>
        $(document).ready(function(){
            $(document).bind('keypress',inputKeyUp);

            function inputKeyUp(e) {
                e.which = e.which || e.keyCode;
                if(e.which == 13) {
                    $(".jSend").trigger("click");
                }
            }

            $(".jSend").click(function(){
                var msg = $("#message").val();

                $.ajax({
                    url: "/web/pages/entityInstant.php",
                    async: true,
                    cache: false,
                    dataType: "html",
                    data: {
                        "msg": msg
                    },
                    success: function (data) {
                        $(".added").remove();
                        $(".timeline").append(data);

                        $("#message").val("");

                    }
                });
            });
        });
    </script>

            <div id="page-wrapper" style="height: 150%">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>Total Response</div>
                                    </div>
                                </div>
                            </div>
                            <a href="logs.php?mode=all">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>Total Data</div>
                                    </div>
                                </div>
                            </div>
                            <a href="training.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-link fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>Total Linkages</div>
                                    </div>
                                </div>
                            </div>
                            <a href="logs.php?mode=fail">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-flask fa-fw"></i> Laboratory
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge"><i class="fa fa-comment"></i>
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Try : <input type="text" id="message" style="width:50%;"/> <a class="btn btn-primary jSend" >Send</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<? include "footer.php";?>