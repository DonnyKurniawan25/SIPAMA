@extends("layout_backend/admin")
@section('content-header')

<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Beranda</h4>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5">
                    <img src="{{asset ('modernize/assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section("content")

<div class="row counter-carousel owl-theme">
  <div class="col">
    <div class="card border-0 zoom-in bg-light-primary shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img
            src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg"
            width="100" height="100" class="mb-3" alt="" />
          <p class="fw-semibold fs-3 text-primary mb-1">Jumlah Pasien</p>
          <h5 class="fw-semibold text-primary mb-0">{{$pasiencount}}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 zoom-in bg-light-danger shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img
            src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg"
            width="100" height="100" class="mb-3" alt="" />
          <p class="fw-semibold fs-3 text-danger mb-1">Jumlah Diagnosa</p>
          <h5 class="fw-semibold text-danger mb-0">{{$diagnosacount}}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 zoom-in bg-light-success shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img
            src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg"
            width="100" height="100" class="mb-3" alt="" />
          <p class="fw-semibold fs-3 text-success mb-1">Jumlah Gejala</p>
          <h5 class="fw-semibold text-success mb-0">{{$gejalacount}}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-0 zoom-in bg-light-info shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img
            src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
            width="100" height="100" class="mb-3" alt="" />
          <p class="fw-semibold fs-3 text-info mb-1">Jumlah Penyakit</p>
          <h5 class="fw-semibold text-info mb-0">{{$penyakitcount}}</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <div class="mb-4">
          <h5 class="card-title fw-semibold">Recent Transactions</h5>
        </div>
        <ul class="timeline-widget mb-0 position-relative mb-n5">
          <li class="timeline-item d-flex position-relative overflow-hidden">
            <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
              <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
              <span class="timeline-badge-border d-block flex-shrink-0"></span>
            </div>
            <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
          </li>
          <li class="timeline-item d-flex position-relative overflow-hidden">
            <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
              <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
              <span class="timeline-badge-border d-block flex-shrink-0"></span>
            </div>
            <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)"
                class="text-primary d-block fw-normal">#ML-3467</a>
            </div>
          </li>
          <li class="timeline-item d-flex position-relative overflow-hidden">
            <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
              <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
              <span class="timeline-badge-border d-block flex-shrink-0"></span>
            </div>
            <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
          </li>
          <li class="timeline-item d-flex position-relative overflow-hidden">
            <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
              <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
              <span class="timeline-badge-border d-block flex-shrink-0"></span>
            </div>
            <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)"
                class="text-primary d-block fw-normal">#ML-3467</a>
            </div>
          </li>
          <li class="timeline-item d-flex position-relative overflow-hidden">
            <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
              <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
              <span class="timeline-badge-border d-block flex-shrink-0"></span>
            </div>
            <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded
            </div>
          </li>
          <li class="timeline-item d-flex position-relative overflow-hidden">
            <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
            <div class="timeline-badge-wrap d-flex flex-column align-items-center">
              <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
            </div>
            <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-8 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Id</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Assigned</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Name</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Priority</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Budget</h6>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">1</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                  <span class="fw-normal">Web Designer</span>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">Elite Admin</p>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                  </div>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                </td>
              </tr>
              <tr>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">2</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                  <span class="fw-normal">Project Manager</span>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                  </div>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                </td>
              </tr>
              <tr>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">3</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                  <span class="fw-normal">Project Manager</span>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                  </div>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                </td>
              </tr>
              <tr>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">4</h6>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                  <span class="fw-normal">Frontend Engineer</span>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">Hosting Press HTML</p>
                </td>
                <td class="border-bottom-0">
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                  </div>
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection