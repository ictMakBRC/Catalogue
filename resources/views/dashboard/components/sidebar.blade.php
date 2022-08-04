<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon-2"  alt="logo icon">
        </div>
        <div>
            <h5 >The catalogue</h5>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-tachometer"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{url('catalogue/dashboard')}}"><i class="bx bx-right-arrow-alt"></i>Inventory</a>
                </li>
                <li> <a href="{{url('catalogue/dashboard2')}}"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
                </li>

            </ul>
        </li>



        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Projects</div>
            </a>
            <ul>
                <li> <a href="{{url('catalogue/projects')}}"><i class="bx bx-right-arrow-alt"></i>Project list</a>
                </li>
                <li> <a href="{{url('catalogue/projects/new/'.mt_rand(5000, 5999).time())}}"><i class="bx bx-right-arrow-alt"></i>New project</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{url('catalogue/specimentypes')}}">
                <div class="parent-icon icon-color-3"> <i class="bx bx-test-tube"></i>
                </div>
                <div class="menu-title">Specimen Types</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-12"> <i class="lni lni-microscope"></i>
                </div>
                <div class="menu-title">Biospecimens</div>
            </a>
            <ul>
                <li> <a href="{{url('catalogue/biospecimens')}}"><i class="bx bx-right-arrow-alt"></i>Biospecimen List</a>
                </li>
                <li> <a href="{{url('catalogue/biospecimen/new')}}"><i class="bx bx-right-arrow-alt"></i>New Biospecimen</a>
                </li>
                <li> <a href="{{url('catalogue/biospecimen/import-batch')}}"><i class="bx bx-right-arrow-alt"></i>Import Batches</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-12"> <i class="bx bx-show"></i>
                </div>
                <div class="menu-title">Organs</div>
            </a>
            <ul>
                <li> <a href="{{url('catalogue/organs')}}"><i class="bx bx-right-arrow-alt"></i>Organ List</a>
                </li>
                <li> <a href="{{url('catalogue/organs/new')}}"><i class="bx bx-right-arrow-alt"></i>New Organ</a>
                </li>
                <li> <a href="{{url('catalogue/organs/import-batch')}}"><i class="bx bx-right-arrow-alt"></i>Import batches</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-12"> <i class="bx bx-badge"></i>
                </div>
                <div class="menu-title">Tissues</div>
            </a>
            <ul>
                <li> <a href="{{url('catalogue/tissues')}}"><i class="bx bx-right-arrow-alt"></i>Tissue List</a>
                </li>
                <li> <a href="{{url('catalogue/tissues/new')}}"><i class="bx bx-right-arrow-alt"></i>New Tissue</a>
                </li>
                <li> <a href="{{url('catalogue/tissues/import-batch')}}"><i class="bx bx-right-arrow-alt"></i>Tissues</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{url('catalogue/requests')}}">
                <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                </div>
                <div class="menu-title">Requests</div>
            </a>
        </li>


        <li>
            <a href="https://codervent.com/syndash/documentation/index.html" target="_blank">
                <div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
                </div>
                <div class="menu-title">Documentation</div>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
