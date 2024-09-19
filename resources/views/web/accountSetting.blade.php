@extends("web.dasbor")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="iq-card">
                <!-- <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Basic Form</h4>
                    </div>
                </div> -->
                <div class="iq-card-body">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis,
                        diam nibh finibus leo</p> -->
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Kata Sandi Baru:</label>
                            <input type="password" name="kata_sandi_baru" class="form-control" id="email1">
                            {{ $errors->first('kata_sandi_baru') }}
                        </div>
                        <!-- <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox mb-3">
                            <label><input type="checkbox"> Remember me</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn iq-bg-danger">Batal</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                <div class="iq-card-body pb-0">
                    <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-exchange-dollar-fill"></i></div>
                    <span class="float-right line-height-6">Net Worth</span>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <h2 class="mb-0"><span class="counter">65</span><span>M</span></h2>
                        <p class="mb-0 text-secondary line-height"><i
                                class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">10%</span>
                            Increased</p>
                    </div>
                </div>
                <div id="chart-1"></div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                <div class="iq-card-body pb-0">
                    <div class="rounded-circle iq-card-icon iq-bg-warning"><i class="ri-bar-chart-grouped-line"></i>
                    </div>
                    <span class="float-right line-height-6">Todays Gains</span>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <h2 class="mb-0"><span>$</span><span class="counter">4500</span></h2>
                        <p class="mb-0 text-secondary line-height"><i
                                class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">20%</span>
                            Increased</p>
                    </div>
                </div>
                <div id="chart-2"></div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                <div class="iq-card-body pb-0">
                    <div class="rounded-circle iq-card-icon iq-bg-success"><i class="ri-group-line"></i></div>
                    <span class="float-right line-height-6">Total Users</span>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <h2 class="mb-0"><span class="counter">96.6</span><span>K</span></h2>
                        <p class="mb-0 text-secondary line-height"><i
                                class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">30%</span>
                            Increased</p>
                    </div>
                </div>
                <div id="chart-3"></div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                <div class="iq-card-body pb-0">
                    <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-shopping-cart-line"></i></div>
                    <span class="float-right line-height-6">Orders Received</span>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <h2 class="mb-0"><span class="counter">15.5</span><span>K</span></h2>
                        <p class="mb-0 text-secondary line-height"><i
                                class="ri-arrow-down-line text-danger mr-1"></i><span class="text-danger">10%</span>
                            Increased</p>
                    </div>
                </div>
                <div id="chart-4"></div>
            </div>
        </div> -->
    </div>
</div>
@endsection