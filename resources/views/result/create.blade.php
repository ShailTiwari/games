<x-header/>
<x-sidebar/>       
 <div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class=" main-body">
            <div class="page-wrapper">   

                <div class="page-body">
                    <div class="row">
                       <div class="col-sm-12">
                                                <!-- Draggable default card start -->
                                                <div class="z-depth-top-0 card">
                                                    <div class="card-header">
                                                        <h5>Create Result</h5>

                                                    </div>
                                                    <div class="card-block">
             <form id="formAccountSettings" method="POST" action="{{ route('create_result') }}" enctype="multipart/form-data">
          @csrf
         <div class="modal-body">  
           <div class="card-block">
            <div class="row g-2">
              <div class="col mb-0">
                <label for="emailLarge" class="form-label">Game*</label>
                 <select name="project" class="form-control form-control-primary" id="exampleFormControlSelect1" aria-label="Default select example">
                   @foreach($projects as $project)
                    <option value="{{$project->id}}" >{{$project->title}}</option>                          
                   @endforeach
                  </select>
              </div>             
            </div>

               <div class="col mb-0">
                <label for="date" class="form-label">Date*</label>
                <input required name="start"  type="date" id="start" class="form-control"/>
              </div>


    <label for="emailLarge" class="form-label">Result</label>
    <table class='table table-bordered' >
       <tr><td><input  name="l1"  type="number" id="l1" class="form-control" placeholder="L1" /></td>
       <td></td>
       <td><input  name="r1"  type="number" id="r1" class="form-control" placeholder="R1" /></td>
     </tr>
       <tr>
       <td><input  name="l2"  type="number" id="l2" class="form-control" placeholder="L2" /></td>
       <td><input  name="result"  type="number" id="result" class="form-control" placeholder="Result" /></td>      
       <td><input  name="r2"  type="number" id="r2" class="form-control" placeholder="R2" /></td>
     </tr>
       <tr><td><input  name="l3"  type="number" id="l3" class="form-control" placeholder="L3" /></td>
        <td></td>
       <td><input  name="r3"  type="number" id="r3" class="form-control" placeholder="R3" /></td>
      </tr>
    </table>


             <div class="row g-2">
              <div class="col mb-0">
                <label for="emailLarge" class="form-label">Remarks</label>
                <input  name="remarks"  type="text" id="remarks" class="form-control" placeholder="remarks" />
              </div>             
            </div>



           
          </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary"  data-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
         </div>
        </form>
                                                    </div>
                                                </div>
                                                <!-- Draggable default card start -->
                                            </div>
                                        </div>
                </div>





            </div>
        </div>
    </div>
 </div>
<x-footer/> 