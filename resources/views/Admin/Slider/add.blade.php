@extends('Admin.master.layout')

@section('content')

    @include('Admin.master.left-sidebar')

    <div id="content" class="span10" style="min-height: 246px;">

        <div class="row-fluid sortable ui-sortable">
            <div class="box span12">
                <div class="box-header" data-original-title="">
                    <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>



                            <div class="control-group">
                                <label class="control-label" for="image1">Image 1</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="image1" type="file" name="image1">
                                        <span class="filename" style="user-select: none;">No file selected</span>
                                        <span class="action" style="user-select: none;">Choose File</span>
                                    </div>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="image1">Image 2</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="image2" type="file" name="image2">
                                        <span class="filename" style="user-select: none;">No file selected</span>
                                        <span class="action" style="user-select: none;">Choose File</span>
                                    </div>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="image3">Image 1</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="image3" type="file" name="image3">
                                        <span class="filename" style="user-select: none;">No file selected</span>
                                        <span class="action" style="user-select: none;">Choose File</span>
                                    </div>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="image4">Image 1</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="image4" type="file" name="image4">
                                        <span class="filename" style="user-select: none;">No file selected</span>
                                        <span class="action" style="user-select: none;">Choose File</span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="image1">Image 5</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="image5" type="file" name="image5">
                                        <span class="filename" style="user-select: none;">No file selected</span>
                                        <span class="action" style="user-select: none;">Choose File</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>


                        </fieldset>
                    </form>

                </div>
            </div><!--/span-->

        </div><!--/row-->

    </div>
@endsection
