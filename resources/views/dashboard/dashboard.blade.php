@extends('dashboard.layout.layout')

@section('content')
    <div class="row">
        <div class="col-lg-3  animate__animated animate__pulse">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Personal Information</h3>
                </div>
                <div class="card-body">
                    <div class="datagrid">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Employee ID (NIK)</div>
                            <div class="datagrid-content">3839</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Name</div>
                            <div class="datagrid-content">Andika Debi Putra</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Level</div>
                            <div class="datagrid-content">Supervisor</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Position</div>
                            <div class="datagrid-content">Software Engineering Supervisor</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Departement</div>
                            <div class="datagrid-content">Software Engineering</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Divisi</div>
                            <div class="datagrid-content">ITE</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Company</div>
                            <div class="datagrid-content">Mandiri Intiperkasa (MIP)</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date of Hire</div>
                            <div class="datagrid-content">25-01-2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9  animate__animated animate__pulse">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Application </h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="card card-md">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                                            </path>
                                            <path d="M10 10l.01 0"></path>
                                            <path d="M14 10l.01 0"></path>
                                            <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row align-items-center">
                                        <div class="col-10">
                                            <div class="markdown text-muted">
                                                <small><b><i>MAGIS - Mandiri Group Integrated System</i></b> adalah portal
                                                    web yang berfungsi sebagai katalog aplikasi dengan konsep Single Sign-On
                                                    (SSO), Memungkinkan pengguna untuk mengakses berbagai aplikasi hanya
                                                    dengan satu kali login.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/bitrix_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">BITRIX24</h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/payday.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">PAYDAY <span
                                                        class="badge badge-sm bg-green-lt">sso</span></h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/medicoal_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">MEDICOAL <span
                                                        class="badge badge-sm bg-green-lt">sso</span></h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/sisakty_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">SISAKTY <span
                                                        class="badge badge-sm bg-green-lt">sso</span></h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/optimals_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">OPTIMALS <span
                                                        class="badge badge-sm bg-green-lt">sso</span></h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/sipaling_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">SIPALING</h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/siaga_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">SIAGA</h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/syscoal_icon.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">SYSCOAL</h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="#" class="card card-link card-link-pop">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="/static/logo/podema_iconx.png"
                                                class="w-100 h-100 object-cover card-img-start p-3"
                                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                                        </div>
                                        <div class="col-7 my-auto">
                                            <div class="card-body ps-0 pe-2">
                                                <h3 class="card-title mb-0">PODEMA</h3>
                                                <p class="text-muted"><small>Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
