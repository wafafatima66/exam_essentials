@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Instructor Joining Details') }}</title>
@endsection

@section('body-header')
    <h3 class="crancy-header__title m-0">{{ __('translate.Instructor Joining Details') }}</h3>
    <p class="crancy-header__text">{{ __('translate.Dashboard') }} >> {{ __('translate.Instructor Joining Details') }}</p>
@endsection

@section('body-content')
    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <div class="crancy-dsinner">

                            <div class="crancy-table crancy-table--v3 mg-top-30">

                                <div class="crancy-customer-filter">
                                    <div class="crancy-customer-filter__single crancy-customer-filter__single--csearch">
                                        <div class="crancy-header__form crancy-header__form--customer">
                                            <h4 class="crancy-product-card__title">{{ __('translate.Instructor Joining Details') }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- crancy Table -->
                                <div id="crancy-table__main_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                    <table class="crancy-table__main crancy-table__main-v3 dataTable no-footer">

                                        <!-- crancy Table Body -->
                                        <tbody class="crancy-table__body review-detials">

                                                <tr class="odd">

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Name') }}</h4>
                                                    </td>


                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title"><a target="_blank" href="{{ route('admin.user-show', $user->id) }}">{{ html_decode($user->name) }}</a></h4>
                                                    </td>


                                                </tr>

                                                <tr class="odd">

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Email') }}</h4>
                                                    </td>

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->email) }}</h4>
                                                    </td>

                                                </tr>

                                                <tr class="odd">

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Phone') }}</h4>
                                                    </td>

                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->phone) }}</h4>
                                                    </td>

                                                </tr>


                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Guardian Phone') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->guardian_phone) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.School Name') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->school_name) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.College Name') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->college_name) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Education Qualification') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->education_qualification) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.O-level Results') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->o_level_results) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.A-level Results') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->a_level_results) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Current University/Semester') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->current_university_semester) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Teaching Experience') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->teaching_experience) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Achievements & Awards') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->educational_achievements) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Notable Student Outcome') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->notable_student_outcome) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Expected Commitment') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->expected_commitment) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Bank Account & Number') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->bank_account_number) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.bKash Number') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->bkash_number) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Personal Statement') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ html_decode($user->personal_statement) }}</h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.Passport Size Photo') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">
                                                            @if ($user->passport_photo)
                                                                <a href="{{ asset($user->passport_photo) }}" target="_blank">
                                                                    <img src="{{ asset($user->passport_photo) }}" alt="Passport Photo" width="100">
                                                                </a>
                                                            @endif
                                                        </h4>
                                                    </td>
                                                </tr>

                                                <tr class="odd">
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">{{ __('translate.NID Photo') }}</h4>
                                                    </td>
                                                    <td class="crancy-table__column-2 crancy-table__data-2">
                                                        <h4 class="crancy-table__product-title">
                                                            @if ($user->nid_photo)
                                                                <a href="{{ asset($user->nid_photo) }}" target="_blank">
                                                                    <img src="{{ asset($user->nid_photo) }}" alt="NID Photo" width="100">
                                                                </a>
                                                            @endif
                                                        </h4>
                                                    </td>
                                                </tr>

                                        </tbody>
                                        <!-- End crancy Table Body -->
                                    </table>

                                    @if ($user->instructor_joining_request == 'pending')
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#reviewApproval" class="crancy-btn approval_button"><i class="fas fa-check"></i> {{ __('translate.Make Approval') }}</a>

                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#reviewRejected" class="crancy-btn"><i class="fas fa-check"></i> {{ __('translate.Make Reject') }}</a>
                                    @endif
                                </div>
                                <!-- End crancy Table -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->


    <!-- Approval Confirmation Modal -->
    <div class="modal fade" id="reviewApproval" tabindex="-1" aria-labelledby="reviewApprovalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewApprovalLabel">{{ __('translate.Approval Confirmation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ __('translate.Are you realy want to approved this application?') }}</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.seller-joining-approval', $user->id) }}" class="delet_modal_form" method="POST">
                        @csrf
                        @method('PUT')

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('translate.Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('translate.Yes, Approved') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Approval Confirmation Modal -->
    <div class="modal fade" id="reviewRejected" tabindex="-1" aria-labelledby="reviewRejectedLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('admin.seller-joining-reject', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewRejectedLabel">{{ __('translate.Rejected Confirmation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="crancy__item-form--group">
                        <label class="crancy__item-label crancy__item-label-product">{{ __('translate.Write reason') }}</label>

                        <textarea class="crancy__item-input crancy__item-textarea seo_description_box"  name="reason" id="reason" required></textarea>

                    </div>
                </div>
                <div class="modal-footer delet_modal_form">
                    <button type="submit" class="btn btn-primary">{{ __('translate.Submit') }}</button>
                </div>
            </form>

        </div>
    </div>

@endsection
