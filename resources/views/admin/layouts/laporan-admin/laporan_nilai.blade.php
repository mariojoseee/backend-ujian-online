@extends('admin.template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <!-- Container-fluid -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Card -->
          <div class="card">
            <!-- Card-body -->
            <div class="card-body" style="overflow-x: auto;">

              <table id="datatables" class="table-bordered table-striped table-sm" style="font-size: 15px; width: 120%;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 40%;">Nama Siswa</th>
                    <th style="width: 10%;">Bahasa Indonesia</th>
                    <th style="width: 10%;">Bahasa Inggris</th>
                    <th style="width: 10%;">Sejarah</th>
                    <th style="width: 10%;">Sosiologi</th>
                    <th style="width: 10%;">Biologi</th>
                    <th style="width: 10%;">Prakarya</th>
                    <th style="width: 10%;">Fisika</th>
                    <th style="width: 10%;">Matematika</th>
                    <th style="width: 10%;">Kimia</th>
                    <th style="width: 10%;">Ekonomi</th>
                    <th style="width: 10%;">Bahasa Prancis</th>
                    <th style="width: 10%;">Matematika Peminatan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Yunia Nurcahyani</td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                    <td>UAS : 45 <br>
                      UTS : 21
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection