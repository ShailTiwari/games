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
                                  <h5>Edit Result Details</h5>

                              </div>
                      <div class="card-block">
                      <form id="formAccountSettings" method="POST"action="{{ route('update_result') }}" enctype="multipart/form-data">
                          @csrf
                        <div class="modal-body">  
                         <div class="card-block">
                          <div class="row g-2">
                            <div class="col mb-0">
                              <label for="emailLarge" class="form-label">Game*</label>
                              <input class="form-control" type="hidden" id="id" name="id" value="{{$member['id']}}" />
                               <select name="project" class="form-control form-control-primary" id="exampleFormControlSelect1" aria-label="Default select example">
                                 @foreach($projects as $project)
                                  <option value="{{$project->id}}"  @if($project->id == $member['project_id']) selected @endif >{{$project->title}}</option>                          
                                 @endforeach
                                </select>
                            </div>             
                          </div>
                  <label for="emailLarge" class="form-label">Result</label>
                  <table class='table table-bordered' >
                     <tr><td><input  value="{{$member['l1']}}"   name="l1"  type="number" id="l1" class="form-control" placeholder="L1" /></td>
                     <td></td>
                     <td><input   value="{{$member['r1']}}"   name="r1"  type="number" id="r1" class="form-control" placeholder="R1" /></td>
                   </tr>
                     <tr>
                     <td><input   value="{{$member['l2']}}"  name="l2"  type="number" id="l2" class="form-control" placeholder="L2" /></td>
                     <td><input  value="{{$member['result']}}"   name="result"  type="number" id="result" class="form-control" placeholder="Result" /></td>      
                     <td><input  value="{{$member['r2']}}"   name="r2"  type="number" id="r2" class="form-control" placeholder="R2" /></td>
                   </tr>
                     <tr><td><input  value="{{$member['l3']}}"   name="l3"  type="number" id="l3" class="form-control" placeholder="L3" /></td>
                      <td></td>
                     <td><input  value="{{$member['r3']}}"   name="r3"  type="number" id="r3" class="form-control" placeholder="R3" /></td>
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
                          <button type="submit" class="btn btn-primary">Update</button>
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
<x-footer/>   <script type="text/javascript">
                      $('#image').change(function()
                      {                             
                      let reader = new FileReader();
                      reader.onload = (e) => { 
                        $('#preview-image').attr('src', e.target.result); 
                      }
                      reader.readAsDataURL(this.files[0]);                     
                     });
                    </script>






























