@section('title', 'Form 2(D)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(D)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    INFORMED CONSENT CHECKLIST FOR P.I.
                </h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="px-3 py-2 font-bold text-lg max-2xl:text-base max-sm:text-sm">STUDY PROTOCOL INFORMATION</h2>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <div class="grid grid-cols-[max-content_1fr] max-sm:grid-cols-1 gap-x-20 gap-y-3 max-w-full">
                        <div class="font-bold">MCUERB Code:</div>
                        <div class="max-sm:mb-2">2025-S1-001</div>

                        <div class="font-bold">Study Protocol Title:</div>
                        <div class="max-sm:mb-2">ERB-2025-001</div>

                        <div class="font-bold">Principal Investigator (PI):</div>
                        <div class="max-sm:mb-2">John Doe</div>

                        <div class="font-bold">PI Contact Numbers:</div>
                        <div class="max-sm:mb-2">09XX-XXX-XX74</div>

                        <div class="font-bold">Study Protocol Submission Date:</div>
                        <div class="max-sm:mb-2">2025-05-05</div>

                        <div class="font-bold">Study Protocol Review Date:</div>
                        <div class="max-sm:mb-2">2025-05-05</div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="p-3 max-sm:text-sm/6">
                    Please indicate <b>YES</b> or <b>NO</b> in the space provided whether or not the informed consent
                    form (ICF) addresses the specified component of <b>NA</b> if Not Applicable. To facilitate the
                    evaluation of the assessment point, indicate the page and paragraph where this information can be
                    found.
                </p>
                <div class="p-3 mt-2 space-y-2 text-base max-sm:text-sm">
                    <h2 class="py-2 font-semibold text-lg max-2xl:text-base max-sm:text-sm">TO BE FILLED UP BY P.I.
                    </h2>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating the study involves research
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_involvement" data-group="1">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_involvement" data-group="1">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_involvement" data-group="1">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_study_involve" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating clearly the purpose of the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_purpose" data-group="2">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_purpose" data-group="2">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_purpose" data-group="2">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_study_purpose" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Explanation to the study participants why they were included in the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="3">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="3">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="3">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="explanation_inclusion" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Provisions ensuring that the study participant's participation in the study is voluntary
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="voluntary" data-group="4">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="voluntary" data-group="4">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="voluntary" data-group="4">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="provisions" id="" placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating that participation may be withdrawn anytime without penalty or loss
                                of benefit to which the participant is entitled
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="5">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="5">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_inclusion" data-group="5">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="explanation_inclusion" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement explaining the nature and procedure of the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_nature" data-group="6">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_nature" data-group="6">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_nature" data-group="6">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_study_nature" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Disclosure of the anticipated risks and benefits to the study participants disclosed?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_benefits" data-group="7">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_benefits" data-group="7">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="risks_benefits" data-group="7">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="disclose_risks_benefits" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statements indicating the potential benefits to the community or to society, or
                                contributions to scientific knowledge stated
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_benefits" data-group="8">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_benefits" data-group="8">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="potential_benefits" data-group="8">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="potential_benefits_statement" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Provisions for the mitigation of risks in the protocol consistent with what is in the
                                ICF?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="mitigation" data-group="9">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="mitigation" data-group="9">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="mitigation" data-group="9">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="provision_mitigations" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Lists of alternative procedure(s) or course(s) of treatment that may be available to the
                                participant and their important potential benefits and risks?
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="alternate_procedure" data-group="10">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="alternate_procedure" data-group="10">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="alternate_procedure" data-group="10">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="alternate_procedure_lists" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement informing study participant of his/her responsibilities
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_responsibilities" data-group="11">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_responsibilities" data-group="11">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_responsibilities" data-group="11">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_responsibilities" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating if there are any anticipated expenses to the study participants in
                                the course of the study
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_expenses" data-group="12">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_expenses" data-group="12">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_expenses" data-group="12">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="expenses_statement" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement indicating if there is a compensation and/or treatment available to the study
                                participants in the event of study-relate injury.
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="compensation" data-group="13">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="compensation" data-group="13">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="compensation" data-group="13">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="compensation_statement" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement that the records identifying the participant will be kept confidential and
                                will not be made publicly available, to the extent permitted by law; and that the
                                identity of the participant will remain confidential in the even the study results are
                                published; including limitations to the investigator's ability to guarantee
                                confidentiality
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_records" data-group="14">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_records" data-group="14">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="participant_records" data-group="14">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_participant_records" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Description of data protection plan and details about storage (including who has access
                                to the study-related documents, how long identifying data will be stored, and manner of
                                storage)
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_protection" data-group="15">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_protection" data-group="15">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="data_protection" data-group="15">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="data_protection_description" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Expected duration of the subject's participation in the study specified
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_duration" data-group="16">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_duration" data-group="16">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="study_duration" data-group="16">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="expected_study_duration" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Approximate number of study subjects stated
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="number_subjects" data-group="17">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="number_subject" data-group="17">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="number_subject" data-group="17">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="approximate_number_subject" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Explanation whether the study participant will be offered the option of receiving
                                overall study findings and results
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="findings_results" data-group="18">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="findings_results" data-group="18">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="findings_results" data-group="18">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="explanation_findings_results" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Person(s) to contact in the study team for further information regarding the study and
                                whom to contact in the event of study-related injury indicated
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="contact"
                                    data-group="19">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="contact"
                                    data-group="19">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]" name="contact"
                                    data-group="19">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="person_contact" id="" placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Statement that the MCUERB has approved the study, and may be reached through the
                                following contact for information regarding rights of study participants, including
                                grievances and complaints <br>
                                <b>Email Address:</b> erb@mcu.edu.ph<br>
                                <b>Contact Number:</b> (02) 8364 1071
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="approval" data-group="20">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="approval" data-group="20">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="approval" data-group="20">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="statement_approval" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label class="max-sm:py-1 flex items-start space-x-2 max-sm:text-sm/6">
                            <span>
                                Manifestation that the language and presentation of the information to be conveyed
                                appropriate to the study participant
                            </span>
                        </label>
                        <div class="flex mt-1 space-x-1 gap-x-2">
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="presentation_language" data-group="21">
                                <span>Yes</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="presentation_language" data-group="21">
                                <span>No</span>
                            </label>
                            <label class="flex items-start space-x-2 max-sm:text-sm/6">
                                <input type="checkbox" class="check mt-1 max-sm:w-[14px] max-sm:h-[14px]"
                                    name="presentation_language" data-group="21">
                                <span>NA</span>
                            </label>
                        </div>
                        <textarea name="manifestation_presentation" id=""
                            placeholder="Page and paragraph where component is found"
                            class="mt-1 w-full resize-none max-sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
            <!-- BUTTONS -->
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2">
                    <button type="button"
                        class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">SAVE</button>
                    <a href="#">
                        <button type="submit"
                            class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 max-sm:p-3 rounded max-sm:text-sm">EXPORT
                            TO PDF</button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>