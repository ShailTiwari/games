<x-header/>
<x-sidebar/>  





 <div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">   

                <div class="page-body">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <div class="row">
                                           @foreach($projects as $project)
                                            <div class="col-md-12 col-xl-4 ">
                                                     <div class="card app-design user-widget-card widget-card-1" style="color: #020202 !important;">
                                                    <div class="card-block">

                                                        <a href="{{url('projects_edit/'.$project->id)}}" data-modal="modal-edit" class="btn btn-warning f-left select_activity   waves-effect  md-trigger">Edit</a>
                                                        <button class="btn btn-primary f-right">{{ substr($project->isactive, 0,  5) }}</button>
                                                        <h6 class="f-w-400 text-muted">{{ $project->title }}</h6>
                                                        <p class="text-c-blue f-w-400">Key: {{ $project->key }}</p>
                                                        <p class="text-muted">{{ substr($project->description, 0,  100) }}</p>
                                                        <div class="design-description d-inline-block m-r-40">
                                                            <h3 class="f-w-400">{{ $project->count_activity }}</h3>
                                                            <p class="text-muted">Result Count</p>
                                                        </div>
                                                        <div class="progress-box">
                                                            <p class="d-inline-block m-r-20 f-w-400">Progress</p>
                                                            <div class="progress d-inline-block">
                                                                <div class="progress-bar bg-c-blue" style="width:78% "><label>78%</label></div>
                                                            </div>
                                                        </div>
                                                        <a href="projects/activity/{{$project->key}}/{{$project->id}}" class="more-info">Activity Info</a>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                       @endforeach
                                      </div>
                   
                </div>
        </div>
    </div>
 </div>
<x-footer/> <!-- Select Project Information in Form and update -->
  
























