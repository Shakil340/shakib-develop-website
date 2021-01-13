@extends('Admin.master.layout')

@section('content')

    @include('Admin.master.left-sidebar')

    <div id="content" class="span10" style="min-height: 246px;">



        <div class="row-fluid sortable ui-sortable">
            <div class="box span12">
                <div class="box-header" data-original-title="">
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 286px;">Username</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 206px;">Date registered</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 112px;">Role</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 127px;">Status</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 257px;">Actions</th></tr>
                            </thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                <td class="  sorting_1">Adam Alister</td>
                                <td class="center ">2012/01/21</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Adinah Ralph</td>
                                <td class="center ">2012/06/01</td>
                                <td class="center ">Admin</td>
                                <td class="center ">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Ajith Hristijan</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Alphonse Ivo</td>
                                <td class="center ">2012/01/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Anton Phunihel</td>
                                <td class="center ">2012/01/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Bao Gaspar</td>
                                <td class="center ">2012/01/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Bernhard Shelah</td>
                                <td class="center ">2012/06/01</td>
                                <td class="center ">Admin</td>
                                <td class="center ">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Bünyamin Kasper</td>
                                <td class="center ">2012/08/23</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Carlito Roffe</td>
                                <td class="center ">2012/08/23</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Chidubem Gottlob</td>
                                <td class="center ">2012/02/01</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Clemens Janko</td>
                                <td class="center ">2012/02/01</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Crofton Arran</td>
                                <td class="center ">2012/08/23</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Dederick Mihail</td>
                                <td class="center ">2012/06/01</td>
                                <td class="center ">Admin</td>
                                <td class="center ">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Felice Arseniy</td>
                                <td class="center ">2012/02/01</td>
                                <td class="center ">Admin</td>
                                <td class="center ">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Finlay Alf</td>
                                <td class="center ">2012/02/01</td>
                                <td class="center ">Admin</td>
                                <td class="center ">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Fricis Arieh</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Grahame Miodrag</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Hipólito András</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Hristofor Sergio</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Innokentiy Celio</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Kostandin Warinhari</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Kristóf Filiberto</td>
                                <td class="center ">2012/01/21</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Kuzma Edvard</td>
                                <td class="center ">2012/01/21</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Pollux Beaumont</td>
                                <td class="center ">2012/01/21</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Sana Amrin</td>
                                <td class="center ">2012/08/23</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Scottie Maximilian</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Sullivan Robert</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Tadhg Griogair</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Thancmar Theophanes</td>
                                <td class="center ">2012/01/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>

                            </tr><tr class="even">
                                <td class="  sorting_1">Theophilus Nala</td>
                                <td class="center ">2012/03/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="odd">
                                <td class="  sorting_1">Tullio Luka</td>
                                <td class="center ">2012/02/01</td>
                                <td class="center ">Staff</td>
                                <td class="center ">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>

                                    </a>
                                </td>
                            </tr><tr class="even">
                                <td class="  sorting_1">Walerian Khwaja</td>
                                <td class="center ">2012/01/01</td>
                                <td class="center ">Member</td>
                                <td class="center ">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center ">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr></tbody></table><div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 32 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div></div></div>
                </div>
            </div><!--/span-->

        </div><!--/row-->




    </div>
@endsection
