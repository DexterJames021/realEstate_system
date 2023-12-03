@extends('layouts.admin')
@section('content')

<div class="content-wrapper">   

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">

                      <h2 class="card-title m-3" >Dashboard</h2>

                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right border-md-top flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye icon-lg me-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Appointments</small>
                            <small class="me-2 mb-0 text-muted">You have: <span class="text-dark">{{$data_a}} appointments</span></small>
                            
                          </div>
                        </div>
                        <div class="d-flex border-md-right border-md-top flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-map me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Contacts</small>
                            <small class="me-2 mb-0 text-muted">You have: <span class="text-dark">{{$data_c}} contacts</span></small>
                          </div>
                        </div>
                        <div class="d-flex border-md-right border-md-top flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Reservation</small>
                            <small class="me-2 mb-0 text-muted">You have: <span class="text-dark">{{$data_r}} reservation</span></small>
                          </div>
                        </div>

                      </div>
                    </div>
                 
           
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            
          <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reservation</h4>
                  <!-- <canvas id="doughnutChart"></canvas> -->
                  <table>
                    
                    <thead>
                      <th>Buyers Email:</th>
                    </thead>
                    
                    <tbody>
                    @foreach($data_p as $call)
                      <tr>
                        <td>
                          <ul>
                            <li>{{$call->email}}</li>
                          </ul>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                 
                  </table>
                </div>
              </div>
            </div>
        
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <!-- <p class="card-title">Total sales</p> -->
                  <h1>Sierra Valley Garden's</h1>
                  <h4>Pre-selling residence</h4>
                  <!-- <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p> -->
                  <div id="total-sales-chart-legend"></div>                  
                </div>
                <canvas id="total-sales-chart"></canvas>
              </div>
            </div>
            </div>
          </div>

        </div>
@endsection
