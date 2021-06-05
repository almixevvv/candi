<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSAppl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_appl', function (Blueprint $table) {
            $table->id('id');
            $table->string('appl_id');
            $table->string('appl_group_id');
            $table->string('name');
            $table->string('description');
            $table->text('icon');
            $table->string('parent_id');
            $table->integer('order');
            $table->string('link');
            $table->timestamp('created_at', $precision = 0);
        });

        $defaultApplGroup = array(
            [
                'appl_id'           => 'LISTING',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Tour Listing',
                'description'       => 'Tour Listing',
                'icon'              => '<!--begin::Svg Icon | path: assets/media/icons/stockholm/Home/Home.svg-->
                <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                    </g>
                </svg></span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '1',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CREATE_LISTING',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Create Listing',
                'description'       => 'Create a new Listing',
                'icon'              => '',
                'parent_id'         => 'LISTING',
                'order'             => '1',
                'link'              => 'cms/listing/create'
            ],
            [
                'appl_id'           => 'SHOW_LISTING',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Show All Listing',
                'description'       => 'Show all available Listing',
                'icon'              => '',
                'parent_id'         => 'LISTING',
                'order'             => '2',
                'link'              => 'cms/listing/show'
            ],
            [
                'appl_id'           => 'STORIES',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Stories List',
                'description'       => 'Stories List',
                'icon'              => '<!--begin::Svg Icon | path: assets/media/icons/stockholm/Layout/Layout-3d.svg-->
                <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M1.5,5 L4.5,5 C5.32842712,5 6,5.67157288 6,6.5 L6,17.5 C6,18.3284271 5.32842712,19 4.5,19 L1.5,19 C0.671572875,19 1.01453063e-16,18.3284271 0,17.5 L0,6.5 C-1.01453063e-16,5.67157288 0.671572875,5 1.5,5 Z M18.5,5 L22.5,5 C23.3284271,5 24,5.67157288 24,6.5 L24,17.5 C24,18.3284271 23.3284271,19 22.5,19 L18.5,19 C17.6715729,19 17,18.3284271 17,17.5 L17,6.5 C17,5.67157288 17.6715729,5 18.5,5 Z" fill="#000000"/>
                        <rect fill="#000000" opacity="0.3" x="8" y="5" width="7" height="14" rx="1.5"/>
                    </g>
                </svg></span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '2',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CREATE_STORIES',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Create Story',
                'description'       => 'Create a new Story',
                'icon'              => '',
                'parent_id'         => 'STORIES',
                'order'             => '1',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'SHOW_STORIES',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Show All Stories',
                'description'       => 'Show all available Stories',
                'icon'              => '',
                'parent_id'         => 'STORIES',
                'order'             => '2',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'SUBSCRIBERS',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Subscribers',
                'description'       => 'Subscribers List',
                'icon'              => '<!--begin::Svg Icon | path: assets/media/icons/stockholm/Communication/Mail-notification.svg-->
                <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
                </svg></span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '3',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'WHOAREWE',
                'appl_group_id'     => 'COMPANY',
                'name'              => 'Who Are We',
                'description'       => 'Who Are We Menu',
                'icon'              => '<!--begin::Svg Icon | path: assets/media/icons/stockholm/Files/File.svg-->
                <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
                        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
                    </g>
                </svg></span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '3',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CREATE_WHOAREWE',
                'appl_group_id'     => 'COMPANY',
                'name'              => 'Edit Content',
                'description'       => 'Edit Content',
                'icon'              => '',
                'parent_id'         => 'WHOAREWE',
                'order'             => '1',
                'link'              => 'cms/whoarewe'
            ],
            [
                'appl_id'           => 'SHOW_SUBSCRIBERS',
                'appl_group_id'     => 'GENERAL',
                'name'              => 'Show Subscribers',
                'description'       => 'Show all subscribers',
                'icon'              => '',
                'parent_id'         => 'SUBSCRIBERS',
                'order'             => '1',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'USER',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'User',
                'description'       => 'User System Menu',
                'icon'              => '<!--begin::Svg Icon | path: assets/media/icons/stockholm/General/User.svg-->
                <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                    </g>
                </svg></span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '4',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CREATE_USER',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Create User',
                'description'       => 'Create New System User Menu',
                'icon'              => '',
                'parent_id'         => 'USER',
                'order'             => '1',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'SHOW_USER',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Show All User',
                'description'       => 'Show All System User',
                'icon'              => '',
                'parent_id'         => 'USER',
                'order'             => '2',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'USER_GROUP',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'User Group',
                'description'       => 'User Group System Menu',
                'icon'              => '<!--begin::Svg Icon | path: icons/stockholm/Communication/Group.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                    </svg>
                </span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '5',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CREATE_USER_GROUP',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Create New User Group',
                'description'       => 'Create New User Group',
                'icon'              => '',
                'parent_id'         => 'USER_GROUP',
                'order'             => '1',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'SHOW_USER_GROUP',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Show All User Group',
                'description'       => 'Show All User Group',
                'icon'              => '',
                'parent_id'         => 'USER_GROUP',
                'order'             => '2',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CATEGORY',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Categories',
                'description'       => 'Categories System Menu',
                'icon'              => '<!--begin::Svg Icon | path: assets/media/icons/stockholm/Layout/Layout-4-blocks.svg-->
                <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                    </g>
                </svg></span>
                <!--end::Svg Icon-->',
                'parent_id'         => '-',
                'order'             => '6',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'CREATE_CATEGORY',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Categories',
                'description'       => 'Categories System Menu',
                'icon'              => '',
                'parent_id'         => 'CATEGORY',
                'order'             => '1',
                'link'              => '-'
            ],
            [
                'appl_id'           => 'SHOW_CATEGORY',
                'appl_group_id'     => 'SYSTEM',
                'name'              => 'Categories',
                'description'       => 'Categories System Menu',
                'icon'              => '',
                'parent_id'         => 'CATEGORY',
                'order'             => '2',
                'link'              => '-'
            ],
        );

        DB::table('s_appl')->insert($defaultApplGroup);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_appl');
    }
}
