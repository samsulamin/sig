@extends('admin.templateAdmin')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Peta Wisata</h4>
                        </div>
                        <div class="card-body">
                            <div id="mapid"></div>
                            <div class="modal fade" id="featureModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title text-primary" id="feature-title"></h4>
                                        </div>
                                        <div class="modal-body" id="feature-info"></div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                                 </div><!-- /.modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

