@extends('Backend.Layout.layout')
            @section('content')
           
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Managed Datatables</h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li class="active">Datatables</li>
                        </ol>
                        <!-- Sidebar Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-sidebar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- Sidebar Toggle Button -->
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <ul class="nav navbar-nav margin-bottom-35">
                                        <li class="active">
                                            <a href="index.html">
                                                <i class="icon-home"></i> Home </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-note "></i> Reports </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> User Activity </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-basket "></i> Marketplace </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Templates </a>
                                        </li>
                                    </ul>
                                    <h3>Quick Actions</h3>
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope "></i> Inbox
                                                <label class="label label-danger">New</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-paper-clip "></i> Task </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-star"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-pin"></i> Events
                                                <span class="badge badge-success">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="m-heading-1 border-green m-bordered">
                                    <h3>DataTables jQuery Plugin</h3>
                                    <p> DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. </p>
                                    <p>
                                    For more info please check out
                                        <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official documentation</a>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject bold uppercase"> Managed Table</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-toolbar">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="btn-group">
                                                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="btn-group pull-right">
                                                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-print"></i> Print </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> Username </th>
                                                            <th> Email </th>
                                                            <th> Status </th>
                                                            <th> Joined </th>
                                                            <th> Actions </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> shuxer </td>
                                                            <td>
                                                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                            <td class="center"> 12 Jan 2012 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> looper </td>
                                                            <td>
                                                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> user1wow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-danger"> Blocked </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> restest </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> foopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-info"> Info </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-danger"> Rejected </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> coop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-info"> Info </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> pppol </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-danger"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> goop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> toopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> tes21t </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> fop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> kop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> vopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> wap </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> toop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                            <td class="center"> 12.12.2011 </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-docs"></i> New Post </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-tag"></i> New Comment </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-user"></i> New User </a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-flag"></i> Comments
                                                                                <span class="badge badge-success">4</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light portlet-fit portlet-datatable bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class=" icon-layers font-green"></i>
                                                    <span class="caption-subject font-green sbold uppercase">Sample Datatable</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-checkbox">
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> Username </th>
                                                            <th> Email </th>
                                                            <th> Status </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> shuxer </td>
                                                            <td>
                                                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> looper </td>
                                                            <td>
                                                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> user1wow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-default"> Blocked </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> restest </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> foopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> coop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> pppol </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-default"> Blocked </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box red">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-cogs"></i>Table </div>
                                                <div class="actions">
                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                        <i class="fa fa-plus"></i> Add </a>
                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                        <i class="fa fa-print"></i> Print </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-checkbox">
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> Username </th>
                                                            <th> Email </th>
                                                            <th> Status </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> shuxer </td>
                                                            <td>
                                                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> looper </td>
                                                            <td>
                                                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-warning"> Suspended </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> user1wow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-default"> Blocked </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> restest </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> foopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> coop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> pppol </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-default"> Blocked </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light portlet-fit portlet-datatable bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class=" icon-layers font-dark"></i>
                                                    <span class="caption-subject font-dark sbold uppercase">Table Footer</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_4">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-checkbox">
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_4 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> Username </th>
                                                            <th> Email </th>
                                                            <th> Salary </th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th class="table-checkbox"> </th>
                                                            <th> Username </th>
                                                            <th> Email </th>
                                                            <th> Salary </th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> shuxer </td>
                                                            <td>
                                                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                            </td>
                                                            <td> $1240 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> looper </td>
                                                            <td>
                                                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                            </td>
                                                            <td> $2122 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                            </td>
                                                            <td> $2324 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> user1wow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td> $1234 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> restest </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td> $1233 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> foopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $4321 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $1244 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> coop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $5422 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> pppol </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $1234 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $6321 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td> $1235 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td> $2323 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light portlet-fit portlet-datatable bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class=" icon-layers font-red"></i>
                                                    <span class="caption-subject font-red sbold uppercase">Table Footer Feedback</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_5">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-checkbox">
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_5 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> Username </th>
                                                            <th> Email </th>
                                                            <th> Salary </th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="3" style="text-align:right">Total:&nbsp;&nbsp;</th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> shuxer </td>
                                                            <td>
                                                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                            </td>
                                                            <td> $1240 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> looper </td>
                                                            <td>
                                                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                            </td>
                                                            <td> $2122 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                            </td>
                                                            <td> $2324 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> user1wow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td> $1234 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> restest </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td> $1233 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> foopl </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $4321 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> weep </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $1244 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> coop </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $5422 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> pppol </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $1234 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                            </td>
                                                            <td> $6321 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> userwow </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                            </td>
                                                            <td> $1235 </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td> test </td>
                                                            <td>
                                                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                            </td>
                                                            <td> $2323 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
    @endsection