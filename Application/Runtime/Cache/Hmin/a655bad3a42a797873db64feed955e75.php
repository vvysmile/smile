<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="/smile/Public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/smile/Public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="/smile/Public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!--<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>-->
    <link href="/smile/Public/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/smile/Public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/smile/Public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="/smile/Public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link rel="stylesheet" type="text/css" href="/smile/Public/media/css/select2_metro.css" />

    <link rel="stylesheet" href="/smile/Public/media/css/DT_bootstrap.css" />

    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="/smile/Public/media/image/favicon.ico" />
</head>
<body>
<section>
    <div class="container-fluid">

        <!-- BEGIN PAGE CONTENT-->



        <div class="row-fluid">

            <div class="span6 responsive" data-tablet="span12 fix-offset" data-desktop="span6">

                <!-- BEGIN EXAMPLE TABLE PORTLET/purple-->

                <div class="portlet box gray">

                    <div class="portlet-title">

                        <div class="caption"><i class="icon-globe"></i><?php if($areaName == '' ): ?>地区管理<?php else: echo ($areaName); endif; ?></div>

                        <div class="actions">
                            <?php if($areaName != ''): ?><a class="btn blue" href="javascritp:void(0);" onclick="history.go(-1);">上一步</a><?php endif; ?>
                            <a href="javascript:AreasAdd(0);" class="btn blue"><i class="icon-pencil"></i> Add</a>

                            <div class="btn-group">

                                <a class="btn green" href="#" data-toggle="dropdown">

                                    <i class="icon-cogs"></i> Tools

                                    <i class="icon-angle-down"></i>

                                </a>

                                <ul class="dropdown-menu pull-right">

                                    <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>

                                    <li><a href="#"><i class="icon-trash"></i> Delete</a></li>

                                    <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>

                                    <li class="divider"></li>

                                    <li><a href="#"><i class="i"></i> Make admin</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover" id="sample_3">

                            <thead>

                            <tr>
                                <th width="16"><input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" /></th>
                                <th>地区名称</th>
                                <th width="80">是否显示</th>
                                <th width="80">排序字母</th>
                                <th width="80">排序号</th>
                                <th width="80">修改</th>
                                <th width="80">删除</th>
                            </tr>

                            </thead>

                            <tbody>
                            <?php if(is_array($Areas)): foreach($Areas as $key=>$v): ?><tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td><a href="javascript:AreasSel(<?php echo ($v["id"]); ?>,'<?php echo ($v["areaname"]); ?>');"><?php echo ($v["areaname"]); ?></a></td>
                                    <td>
                                        <?php if($v["isshow"] == 1): ?><span class="show" onclick="javascript:toIsShow(<?php echo ($v['id']); ?>,0);" style="cursor: pointer;">显示</span>
                                            <?php else: ?>
                                            <span class="show" onclick="javascript:toIsShow(<?php echo ($v['id']); ?>,1);" style="cursor: pointer;">隐藏</span><?php endif; ?>
                                    </td>
                                    <td><?php echo ($v["areakey"]); ?></td>
                                    <td><?php echo ($v["areasort"]); ?></td>
                                    <td><a class="edit" href="javascript:AreasEdit(<?php echo ($v["id"]); ?>);">修改</a></td>
                                    <td><a href="javascript:AreasDel(<?php echo ($v["id"]); ?>,'<?php echo ($v["areaname"]); ?>');">删除</a></td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>

                        </table>

                    </div>

                </div>

                <!-- END EXAMPLE TABLE PORTLET-->

            </div>

        </div>

        <!-- END PAGE CONTENT-->

    </div>
</section>

<div class="footer">

    <div class="footer-inner">

        2016 © SmileEx By 画中浅笑

    </div>

    <div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

    </div>

</div>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS  核心插件-->
    <script src="/smile/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="/smile/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="/smile/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="/smile/Public/media/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="/smile/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/smile/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/smile/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="/smile/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS 水平插件 -->
<script type="text/javascript" src="/smile/Public/media/js/select2.min.js"></script>
<script type="text/javascript" src="/smile/Public/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/smile/Public/media/js/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="/smile/Public/media/js/app.js"></script>

<script src="/smile/Public/common.js"></script>
<script src="/smile/Public/layer/layer.js"></script>

<script src="/smile/Public/media/js/table-managed.js"></script>

<script>
    jQuery(document).ready(function() {
        App.init();
        TableManaged.init();
    });
    var AreasAdd  = function (id) {
        layer.open({
            type: 2,
            title: "添加地区",
            area: ['50%', '286px'],
            shade: 0.8,
            shadeClose: true,
            content: '<?php echo U("Areas/AreasAdd");?>&id='+id,
        });
    }
    var AreasSel  = function (id,title) {
        location.href="<?php echo U('Areas/index');?>&id="+id+"&title="+title;
    }
    var AreasEdit = function (id) {
        layer.open({
            type: 2,
            title: "修改地区",
            area: ['50%', '286px'],
            shade: 0.8,
            shadeClose: true,
            content: '<?php echo U("Areas/AreasEdit");?>&id='+id,
        });
    }
    var AreasDel = function (id,title) {
        layer.confirm("确定要删除 [地区：<font color='red'>"+title+"</font>] 么?",{icon:3,title:"删除"+title+""}, function (index) {
            var loading = layer.msg("正在删除，请等候......",{icon:16,time:60000});
            $.post("<?php echo U('Areas/AreasDel');?>",{id:id},function(data){
                if(data==1){
                    layer.close(loading);
                    layer.msg("删除成功！",{icon:1,time:2000}, function () {
                        window.location.reload();
                    });
                }else{
                    layer.close(loading);
                    layer.msg("删除失败!",{icon:2,time:2000});
                }
            });
        });
    }
    var toIsShow = function (id,isshow) {
        var loading = layer.msg("正在处理...",{icon:16,time:3000});
        $.post("<?php echo U('Areas/AreasShow');?>",{id:id,isshow:isshow}, function (rs) {
            if(rs==1){
                layer.close(loading);
                layer.msg("操作成功!",{icon:1,time:2000}, function () {
                    window.location.reload();
                });
            }else{
                layer.close(loading);
                layer.msg("操作失败!",{icon:2,time:2000});
            }
        });
    }
</script>

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>

</body>
</html>