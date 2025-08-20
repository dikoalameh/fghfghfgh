@section('title', 'Form 2(A)')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3">FORM 2(A)</p>
                <h1 class="text-center mt-10 font-bold text-2xl mb-2 underline">STUDY PROTOCOL REVIEW CHECKLIST</h1>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="p-3 font-bold text-lg">STUDY PROTOCOL INFORMATION</h2>
                <div class="p-3 flex justify-between items-start space-x-5">
                    <div class="flex flex-col basis-[33.33%] justify-end">
                        <label class="font-semibold">
                            STUDY PROTOCOL TITLE
                        </label>
                        <input type="text" name="protocol"
                            class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                    </div>
                    <div class="flex flex-col basis-[33.33%] justify-end">
                        <label class="font-semibold">
                            PRINCIPAL INVESTIGATOR
                        </label>
                        <input type="text" name="pi-name" class="mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                    </div>
                    <div class="flex flex-col basis-[33.33%] justify-end">
                        <label class="font-semibold">
                            CO-INVESTIGATOR
                        </label>
                        <input type="text" name="coiname" class="mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="p-3 font-bold">TO BE FILLED UP BY THESIS ADVISER</h2>
                <div class="p-3 grid grid-cols-2 md:grid-cols-2 gap-x-10 gap-y-3 text-sm">
                    <!-- LEFT COLUMN -->
                    <div class="space-y-2 text-base">
                        <h2 class="font-bold">Basic Documents (must submit for initial review)</h2>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="cover_letter">
                            <span>Cover letter from the thesis/dissertion advisor/mentor with noted by the College Dean
                                - <i>for MCU Students</i></span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="enrollment_proof">
                            <span>Proof of enrollment (1 photocopied and e-copy of registration form) - <i>for MCU
                                    Students</i></span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="letter">
                            <span>Letter from the thesis/dissertion advisor/mentor noted by the College Dean signifying
                                that the protocol had undergone and passed technical review</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="complete_form2b">
                            <span>Completed <b>MCUERB FORM 2(B) APPLICATION FOR INITIAL REVIEW</b> - 1 hard copy of
                                printed and a soft copy</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="complete_form2a">
                            <span>Completed <b>MCUERB FORM 2(A) PROTOCOL REVIEW CHECKLIST</b></span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="complete_form2d">
                            <span>Completed <b>MCUERB FORM 2(D) INFORMED CONSENT CHECKLIST for PRINCIPAL INVESTIGATOR
                                    (PI)</b></span>
                        </label>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="space-y-2 text-base">
                        <h2 class="font-bold">Protocol Package (must submit for initial review)</h2>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="study_protocol">
                            <span>Study Protocol (Chapters I, II, & III)</span>
                        </label>
                        <label class="flex items-start space-x-2 font-bold">
                            <input type="checkbox" class="mt-1" name="form2c_eng">
                            <span>MCUERB FORM 2(C) INFORMED CONSENT FORM - English Version</span>
                        </label>
                        <label class="flex items-start space-x-2 font-bold">
                            <input type="checkbox" class="mt-1" name="form2c_fil">
                            <span>MCUERB FORM 2(C) INFORMED CONSENT FORM - Filipino Version or in local language/dialect
                                (if
                                applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="data_collection">
                            <span>Data collection forms/tools/instrument/questionnaire</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="cert_validator">
                            <span>Certificates of Validators of the tool(s)/instrument(s)/questionnaire (at least three
                                (3)
                                validators) - Researcher's developed tool (if applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="7_12_yrs_eng">
                            <span>Child Assent for Children Ages 7-12 years - English Version (if applicable)</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="7_12_yrs_fil">
                            <span>
                                Child Assent for Children Ages 7-12 years - Filipino/Dialect Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="13_17_yrs_eng">
                            <span>
                                Child Assent for Children Ages 13-17 years - English Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="13_17_yrs_fil">
                            <span>
                                Child Assent for Children Ages 13-17 years - Filipino/Dialect Version (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="advertisement">
                            <span>
                                Recruitment advertisement(s) and/or social media Poster (as needed by the study
                                protocol)
                                (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="vitae">
                            <span>Curriculum Vitae of PI and study team members</span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="gcp">
                            <span>Good Clinical Practice (GCP) or Health Research Ethics Training Certificate of PI and
                                Co-Investigators (GCP is required for clinical trials) obtained within the last three
                                (3) years (if applicable)
                            </span>
                        </label>
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" class="mt-1" name="gantt_chart">
                            <span>Gantt Chart</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="p-3">Details <b>should be visible</b> in the research methods <b>(Chapter III)</b> of the
                    thesis/research
                    proposal involving human participants, for the efficiency of the ERB review process. (To be filled
                    up by the Researcher)</p>

                <!-- Seniors -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">Seniors</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Informed Consent -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Informed Consent:</b> Ensure clarity and accessibility of consent forms,
                                    considering
                                    cognitive and sensory impairments (e.g., large fonts, simple language). <b>How would
                                        you
                                        accomplish this?</b>
                                </span>
                            </label>
                            <textarea name="informed_consent" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Cognitive Assessment -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Cognitive Assessment:</b> Verify the capacity to consent and consider involving
                                    legally authorized representatives if necessary.
                                </span>
                            </label>
                            <textarea name="cognitive_assessment" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Physical Health Risks -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Physical Health Risks:</b> Evaluate potential health risks due to medical
                                    conditions or physical frailty.
                                </span>
                            </label>
                            <textarea name="physical_risks" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Respect and Autonomy -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Respect and Autonomy:</b> Ensure particiapnts are not coerced or unduly
                                    influenced due to age-related vulnerabilities. This must be explicit in the Methods
                                    text.
                                </span>
                            </label>
                            <textarea name="respect_autonomy" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Privacy -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Privacy and Confidentiality:</b> Safeguard sensitive health information and
                                    ensure
                                    respectful data handling. Indicate the methods you would adopt to achieve this.
                                </span>
                            </label>
                            <textarea name="privacy_confidentiality" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Intervention Suitability -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Intervention Suitability:</b> Confirm interventions are age-appropriate and do
                                    not disproportionately burden seniors.
                                </span>
                            </label>
                            <textarea name="intervention_suitability" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <!-- Minors -->
                    <h2 class="text-lg font-semibold">Minors (Include your details in each item)</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Parental/Guardian Consent -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Parental/Guardian Consent:</b> Require consent from parents or legal guardians,
                                    and where appropriate, seek assent from the minors themselves.
                                </span>
                            </label>
                            <textarea name="parent_consent" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Assent Process -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Assent Process:</b> Tailor information for children's comprehension based on age,
                                    maturity, and developmental stage.
                                </span>
                            </label>
                            <textarea name="assent_process" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Protection from Harm -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Protection from Harm:</b> Minimize psychological, physical, and emotional risks.
                                    Details on how should be specified.
                                </span>
                            </label>
                            <textarea name="harm_protection" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Educational Balance -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Educational Balance:</b> Ensure participation does not interfere with schooling
                                    or normal development. Detail on this is necessary.
                                </span>
                            </label>
                            <textarea name="educational_balance" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Mandatory Reporting -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Mandatory Reporting:</b> Ensure mehchanisms are in place to report suspected
                                    abuse or neglect.
                                </span>
                            </label>
                            <textarea name="mandatory_reporting" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Equitable Inclusion -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Equitable Inclusion:</b> Avoid exploiting minors solely because they are an
                                    accessible population
                                </span>
                            </label>
                            <textarea name="equitable_inclusion" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Persons with Disabilities -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">Persons with Disabilities (Include your details in each items)
                    </h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Accessible Communication -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Accessible Communication:</b> Adapt materials and processes for participants'
                                    specific disabilities (e.g., braille, sign language, or simplified text).
                                </span>
                            </label>
                            <textarea name="accessible_comm" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Capacity to Consent -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Capacity to Consent:</b> Assess individual decision-making abilities and involve
                                    legal representatives when necessary.
                                </span>
                            </label>
                            <textarea name="consent_capacity" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Risk Mitigation -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Risk Mitigation:</b> Address potential physical, emotional, or psychological
                                    harm.
                                </span>
                            </label>
                            <textarea name="risk_mitigation" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Non-Discrimination -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Non-Discrimination:</b> Ensure the study promotes inclusion and avoids
                                    stigmatization or bias.
                                </span>
                            </label>
                            <textarea name="non_discrimination" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Reasonable Accommodations -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Reasonable Accommodations:</b> Provide necessary support, such as assistive
                                    devices or adaptive technologies.
                                </span>
                            </label>
                            <textarea name="reasonable_accommodations" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Monitoring -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Monitoring:</b> Implement mechanisms to monitor and address any adverse effects
                                    unique to the disability.
                                </span>
                            </label>
                            <textarea name="monitoring" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Person Deprived of Liberty -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">Persons Deprived of Liberty (include your details in each item).
                    </h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Volutary Participation -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Voluntary Participation:</b> Safeguard against coercion, considering the inherent
                                    power imbalances in detention or institutional settings. Indicate how?
                                </span>
                            </label>
                            <textarea name="voluntary_participation" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Equitable Selection -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Equitable Selection:</b> Ensure inclusion is based on scientific reasons and, not
                                    convenience or vulnerability.
                                </span>
                            </label>
                            <textarea name="equitable_selection" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Privacy and Confidentiality -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Privacy and Confidentiality:</b> Ensure inclusion is based on scientific reasons
                                    and, not convenience or vulnerability.
                                </span>
                            </label>
                            <textarea name="privacy_confidentiality_2" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Benefit and Risk Analysis -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Benefit and Risk Analysis:</b> Ensure the study offers direct benefits to
                                    participants or their communities and minimizes risks.
                                </span>
                            </label>
                            <textarea name="benefit_risk_analysis" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Independent Oversight -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Independent Oversight:</b> Verify the absence of institutional conflicts of
                                    interest or undue influence.
                                </span>
                            </label>
                            <textarea name="independent_oversight" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Post-Study Support -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Post-Study Support:</b> Address how findings or interventions will be accessible
                                    to participants after the study.
                                </span>
                            </label>
                            <textarea name="post_study_support" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- General Principles for All Groups -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">General Principles for All Groups:</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <!-- Ethical Justification -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Ethical Justification:</b> Clearly outline the necessity and appropriateness of
                                    including vulnerable populations.
                                </span>
                            </label>
                            <textarea name="ethical_justification" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Scientific Validity -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Scientific Validity:</b> Confirm that the study design is rigorous and ethically
                                    justifiable.
                                </span>
                            </label>
                            <textarea name="scientific_validity" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Risk-Benefit Assessment -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Risk-Benefit Assessment:</b> Ensure that risks are minimal, and benefits
                                    outweight
                                    potential harm.
                                </span>
                            </label>
                            <textarea name="risk_benefit_assessment" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Cultural Sensitivity -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Cultural Sensitivity:</b> Consider cultural norms and values relevant to each
                                    group.
                                </span>
                            </label>
                            <textarea name="cultural_sensitivity" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <!-- Compensation -->
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    <b>Compensation:</b> Ensure fair and non-coercive incentives or reimbursements.
                                </span>
                            </label>
                            <textarea name="compensation" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Process of Participant Recruitment -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">Process of Participant Recruitment</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Include how potential participants will be recruited, contacted, screened, and
                                    registered in the study described.
                                </span>
                            </label>
                            <textarea name="potential_participants" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Specify conditions and characteristics applicable to the identification and
                                    selection of participants in the study and the conditions necessary for eligible
                                    persons to be included in the inclusion criteria.
                                </span>
                            </label>
                            <textarea name="conditions_characteristics" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Specify whether there are any groups of people who might be more susceptible to the
                                    risks presented by the study and who therefore ought to be excluded from the
                                    research in the selection of participants.
                                </span>
                            </label>
                            <textarea name="susceptible_to_risks" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Indicate if any, special vulnerability among prospective study participants that
                                    might be relevant to evaulating the risk of participation considered.
                                </span>
                            </label>
                            <textarea name="special_vulnerability" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    State explicitly possible indication of special measures to be implemented to
                                    protect the vulnerability of study participants.
                                </span>
                            </label>
                            <textarea name="possible_indication" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    State explicitly that the procedures for informing participants about the study and
                                    methods and for obtaining consent are clearly described. Indicate how you would do.
                                </span>
                            </label>
                            <textarea name="procedure" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Sample size and suitable determination procedure -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">Describe the sample size and suitable determination procedure
                        based on your research design.</h2>
                    <div class="mt-2 space-y-2 text-base">
                        <div>
                            <label>
                                <span>
                                    1.
                                </span>
                            </label>
                            <textarea name="sample_size_1" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <span>
                                    2.
                                </span>
                            </label>
                            <textarea name="sample_size_2" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Site of data collection -->
                <div class="p-3">
                    <h2 class="text-lg font-semibold">Describe the sample size and suitable determination procedure
                        based on your research design.</h2>
                    <div class="mt-2 space-y-2 text-base">

                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Specify measures to ensure the anonymity and confidentiality of the study
                                    participants and data collected clearly indicated: Indicate how you would achieve
                                    this.
                                </span>
                            </label>
                            <textarea name="anonymity_confidentiality" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Include procedures regarding confidentality of the data, including how
                                    confidentiality will be preserved during transmission, use, and storage of the data
                                    and the names of persons or positions responsible for technical and administrative
                                    stewardship responsibilities properly discussed.
                                </span>
                            </label>
                            <textarea name="procedures_confidentiality" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox">
                                <span>
                                    Clearly include the prcedures on how the final disposition of records, data,
                                    compuiter files, and specimens will be, including the location for any relevant
                                    information to be stored discussed.
                                </span>
                            </label>
                            <textarea name="final_disposition" id="" class="mt-1 w-full resize-none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <h2 class="p-3 font-bold text-lg">STUDY PROTOCOL INFORMATION</h2>
                <div class="p-3 flex justify-between items-start space-x-5">
                    <div class="flex flex-col basis-[33.33%] justify-end">
                        <label class="font-semibold">
                            THESIS ADVISER
                        </label>
                        <input type="text" name="thesisadviser"
                            class="block mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                    </div>
                    <div class="flex flex-col basis-[33.33%] justify-end">
                        <label class="font-semibold">
                            NOTED BY: 
                        </label>
                        <input type="text" name="notedby" class="mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                    </div>
                    <div class="flex flex-col basis-[33.33%] justify-end">
                        <label class="font-semibold">
                            RESEARCH COORDINATOR
                        </label>
                        <input type="text" name="coordinator" class="mt-1 w-full text-[14px] max-sm:text-[13px] h-[35px]">
                    </div>
                </div>
            </div>
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <div class="p-3 flex items-center justify-center space-x-2">
                    <a href="">
                        <button type="button" class="bg-primary text-secondary hover:bg-secondary hover:text-primary duration-200 tracking-widest p-4 rounded">SAVE</button>
                    </a>
                    <a href="">
                        <button type="submit" class="bg-secondary text-primary hover:bg-primary hover:text-secondary duration-200 tracking-widest p-4 rounded">EXPORT TO PDF</button>
                    </a>
                </div>
            </div>
        </form>
    </main>
</x-student-layout>