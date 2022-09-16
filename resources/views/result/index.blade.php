<x-header/>
<x-sidebar/>           
 <div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                              <!-- ticket and update start -->
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Result List</h5>
                                                    
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                         <th>No</th>
                                                                         <th>Game Name</th>
                                                                         <th>Result Date</th>
                                                                         <th>Left</th>
                                                                         <th>Result</th>
                                                                         <th>Right</th>
                                                                         <th width="280px">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody> 
                                                                   @foreach ($data as $key => $result)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $result->title }}</td>
                                                <td>{{date('d-m-Y', strtotime($result->result_date))}}</td>
                                                <td>{{ $result->l1 }}-{{ $result->l2 }}-{{ $result->l3 }}</td>
                                                <td>{{ $result->result }}</td>  
                                                <td>{{ $result->r1 }}-{{ $result->r2 }}-{{ $result->r3 }}</td>                                              
                                                <td>
                                                 <a class="btn btn-round btn-sm btn-primary"  href="{{url('results_edit/'.$result->id)}}">Edit</a>                                              
                                                </td>
                                            </tr>
                                            @endforeach
                                                                   
                                                                </tbody>
                                                            </table>
                                                            <div class="text-right m-r-20">
                                                                 {!! $data->links() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>
<x-footer/> 