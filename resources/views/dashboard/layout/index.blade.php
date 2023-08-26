<div class="container-fluid">
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th></th></th>
                          <th>Full name</th>
                          <th>Department name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $value )
                       <tr>
                        <td>{{ $value['Did'] }}</td>
                        <td>{{ $value['Fname']}}</td>
                        <td>{{ $value['depname']}}</td>
                        <td>  
                          <button type="button" class="btn btn-danger"><a style="color:white;" href="#";>Edit</a></button>
                          <button type="button" class="btn btn-primary"><a style="color:white;" href="#">Delete</a></button>
                        </td>
                       </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

        </div>