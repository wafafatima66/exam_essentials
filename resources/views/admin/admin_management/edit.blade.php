@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Edit Admin') }}</title>
@endsection
@section('body-header')
    <h3 class="crancy-header__title m-0">{{ __('translate.Edit Admin') }}</h3>
    <p class="crancy-header__text">{{ __('translate.Manage Admin') }} >> {{ __('translate.Edit Admin') }}</p>
@endsection
@section('body-content')
    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <!-- Dashboard Inner -->
                        <div class="crancy-dsinner">
                            <form action="{{ route('admin.admin-list.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 mg-top-30">
                                        <!-- Product Card -->
                                        <div class="crancy-product-card">
                                            <div class="create_new_btn_inline_box">
                                                <h4 class="crancy-product-card__title">{{ __('translate.Edit Admin') }}</h4>
                                                <a href="{{ route('admin.admin-list.index') }}" class="crancy-btn crancy-btn__filter">
                                                    {{ __('translate.Go Back') }}
                                                </a>
                                            </div>

                                            <div class="crancy__item-form--group mg-top-25">
                                                <label class="crancy__item-label crancy__item-label-product">{{ __('translate.Name') }} *</label>
                                                <input class="crancy__item-input" type="text" name="name" value="{{ $admin->name }}">
                                            </div>

                                            <div class="crancy__item-form--group mg-top-25">
                                                <label class="crancy__item-label crancy__item-label-product">{{ __('translate.Email') }} *</label>
                                                <input class="crancy__item-input" type="email" name="email" value="{{ $admin->email }}">
                                            </div>

                                            <div class="crancy__item-form--group mg-top-25">
                                                <label class="crancy__item-label crancy__item-label-product">{{ __('translate.Password') }}</label>
                                                <input class="crancy__item-input" type="password" name="password">
                                            </div>

                                            <div class="crancy__item-form--group mg-top-25">
                                                <label class="crancy__item-label crancy__item-label-product">{{ __('translate.Admin Type') }} *</label>
                                                <select class="form-select crancy__item-input" name="admin_type">
                                                    <option value="">{{ __('translate.Select Admin Type') }}</option>
                                                    <option {{ $admin->admin_type == 'super_admin' ? 'selected' : '' }} value="super_admin">{{ __('translate.Super Admin') }}</option>
                                                    <option {{ $admin->admin_type == 'restricted_admin' ? 'selected' : '' }} value="restricted_admin">{{ __('translate.Restricted Admin') }}</option>
                                                </select>
                                            </div>

                                            <div class="crancy__item-form--group mg-top-25">
                                                <label class="crancy__item-label crancy__item-label-product">{{ __('translate.Status') }} *</label>
                                                <select class="form-select crancy__item-input" name="status">
                                                    <option {{ $admin->status == 'enable' ? 'selected' : '' }} value="enable">{{ __('translate.Active') }}</option>
                                                    <option {{ $admin->status == 'disable' ? 'selected' : '' }} value="disable">{{ __('translate.Inactive') }}</option>
                                                </select>
                                            </div>

                                            <button class="crancy-btn mg-top-25" type="submit">{{ __('translate.Update') }}</button>

                                        </div>
                                        <!-- End Product Card -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->
@endsection
