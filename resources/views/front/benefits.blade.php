@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8" data-background="assets/images/uploads/board.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Benefits</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Benefits</li>
                        </ul>
                        <h1 class="back-title">Benefits</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    <section class="pt-60 pb-60">
        <div class="container ">
            <div class="table-responsive">
                <div class="section-heading mb-20">
                    <h2 class="section-title">Benefits</h2>
                </div>
                <table class="table table-hover benefit-table">
                    <thead class="thead-light">
                        <tr class="">
                            <th> PREMIUM /ANNUM</th>
                            <th>BLUE PLAN</th>
                            <th>ROYAL PLAN</th>
                            <th>PLATINUM PLAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>INDIVIDUAL</th>
                            <td class="individual">N30,000.00 </td>
                            <td class="individual">N52,000.00 </td>
                            <td class="individual">N90,000.00 </td>
                        </tr>
                        <tr>
                            <th>FAMILY OF 2</th>
                            <td class="">N57,500.00</td>
                            <td class="">N90,640.00 </td>
                            <td class="">N163,620.00</td>
                        </tr>
                        <tr>
                            <th>FAMILY OF 3</th>
                            <td class="">N80,500.00</td>
                            <td class="">N128,440.00</td>
                            <td class="">N235,620.00</td>
                        </tr>
                        <tr>
                            <th>FAMILY OF 4</th>
                            <td class="">N103,000.00</td>
                            <td class="">N166,240.00</td>
                            <td class="">N307,600.00</td>
                        </tr>
                        <tr>
                            <th>FAMILY OF 5</th>
                            <td class="">N125,000.00</td>
                            <td class="">N203,200.00</td>
                            <td class="">N377,980.00</td>
                        </tr>
                        <tr>
                            <th>FAMILY OF 6</th>
                            <td class="">N146,500.00</td>
                            <td class="">N239,300.00</td>
                            <td class="">N473,740.00</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">CONSULTATION</th>
                        </tr>
                        <tr>
                            <th>General Consultation Covered Covered Covered
                                Specialist Consultation (up to Approved Limits)</th>
                            <td>3 Per Annum</td>
                            <td>4 Per Annum</td>
                            <td>6 Per Annum</td>
                        </tr>
                        <tr>
                            <th>Specialist Consultation (up to Approved Limits) </th>
                            <td>3 Per Annum </td>
                            <td>4 Per Annum </td>
                            <td>6 Per Annum </td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">PSYSIOTHERAPY SERVICES </th>
                        </tr>
                        <tr>
                            <th>Physiotherapy Sessions (up to Approved Limits)</th>
                            <td>3 Per Annum </td>
                            <td>5 Per Annum </td>
                            <td>10 Per Annum </td>
                        </tr>
                        <tr>
                            <th>Prescribed Physiotherapeutic appliances such as collar,
                                crutches e.t.c </th>
                            <td>Not Covered</td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4"> OBSTETRICS AND GYNAECOLOGICAL SERVICES </th>
                        </tr>
                        <tr>
                            <th>Antenatal Care</th>
                            <td>Covered</td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>

                        <tr>
                            <th>Induction of Labour and Normal Delivery</th>
                            <td>Covered</td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>

                        <tr>
                            <th>Assisted Delivery</th>
                            <td>Covered</td>
                            <td>Covered</td>
                            <td>Covered</td>

                        </tr>

                        <tr>
                            <th>Emergency or Medically Indicated Elective Caesarean
                                Section</th>
                            <td>Not Covered </td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>

                        <tr>
                            <th>Post Natal Care </th>
                            <td>Covered</td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>
                        <tr>
                            <th>Family Planning Services- Pills and Injectibles </th>
                            <td>Covered</td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>
                        <tr>
                            <th>Family Planning Services – Copper IUCD </th>
                            <td>Not Covered </td>
                            <td>Covered</td>
                            <td>Covered</td>
                        </tr>

                        <tr>
                            <th>Fertility services (Investigations only)</th>
                            <td>Counseling , SFA</td>
                            <td>Counseling, USS, SFA,HSG,
                                Hormonal Assay </td>
                            <td> Counseling, USS, SFA, HSG, Hormonal
                                Assay, Hysteroscopy </td>
                        </tr>

                        <tr>
                            <th class="group-head" colspan="4">NEONATAL/PEDIATRIC SERVICES </th>
                        </tr>

                        <tr>
                            <th>Primary Care including circumcision, Ear piercing and exchange Blood transfusion</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td </tr>
                        <tr>
                            <th>Special Baby Care Unit (Intensive Care Unit- including
                                life support, Phototherapy and incubator Care)</th>
                            <td> Not Covered</td>
                            <td> Covered</td>
                            <td> Covered</td </tr>
                        <tr>
                            <th>Routine immunization (NPI)FOR 0-5yrs – Pneumococcal,
                                DPT, Hepatitis B, HiB (Pentavalent), BCG, Measles, Oral
                                Polio, Vitamin A Supplementation and Yellow fever</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td </tr>
                        <tr>
                            <th>Additional Immunization for Children for Children 6 to
                                17 years (Meningitis, Yellow Fever and Hepatitis B)</th>
                            <td> Not Covered</td>
                            <td> Not Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Additional Immunization for under 5, (Hexaxim (DTPa-
                                HepB-IPV-Hib), Varicella, Rotarix, Pheumococcal, Yellow Fever, Meningococcal, Hepatitis B,
                                HIB,
                                MMR & Typherix) at Designated Centre </th>
                            <td> Not Covered</td>
                            <td> Not Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">ACCIDENTS AND EMERGENCIES </th>
                        </tr>
                        <tr>
                            <th>Stabilization, Emergency drugs and Investigations
                                (Including CT scan and MRI) </th>
                            <td> Not Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Intensive Care Unit (ICU) </th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">DENTAL SERVICES</th>
                        </tr>
                        <tr>
                            <th> Primary Dental Care-Examination, Basic dental treatment, Scaling and Polishing</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th> Composite Filling, Non Surgical Extractions and Pain
                                therapy/Relief</th>
                            <td>Not Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th> Simple Amalgam</th>
                            <td>Not Covered</td>
                            <td>Not Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Secondary Dental Care-Surgical tooth extraction, Root canal treatments </th>
                            <td>Not Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">OPHTHALMOLOGICAL SERVICES</th>
                        </tr>
                        <tr>
                            <th>Primary Eye Care Consultation, Examination, Simple or primary infection or conditions and
                                Medication</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Eye Testing</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Biennial Optical lenses and Frames</th>
                            <td>Not Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Eye Surgeries</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">OTOLARYNGOLOGICAL (ENT) SERVICES </th>
                        </tr>
                        <tr>
                            <th>Treatment of ENT diseases and removal of foreign bodies </th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th> ENT Surgeries </th>
                            <td> Covered</td>
                            <td>Not Covered</td>
                            <td>Not Covered</td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">SURGICAL SERVICES</th>
                        </tr>
                        <tr>
                            <th>Minor, Intermediate, Major Surgeries and Procedures </th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Anaesthesia, Surgical supplies/Consumables, Administration of Blood products, etc</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>ADMISSION SERVICES </th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Admissions in Hospital</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Feeding on Admission</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Drugs and Infusions </th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Admission Days Per Annum</th>
                            <td>15 Days</td>
                            <td>20 Days </td>
                            <td>25 Days </td>
                        </tr>
                        <tr>
                            <th class="group-head" colspan="4">OTHER SERVICES/BENEFITS</th>
                        </tr>
                        <tr>
                            <th>Annual Health check up at designated centre</th>

                            <td>Not Covered </td>
                            <td>Physical Examination, BMI, Urinalysis, PCV, Blood Pressure, Blood sugar, Genotype, Chest X-
                                ray,
                                ECG, Serum Cholesterol, LFT, E/U/Cr, Annual mammogram, Cervical Smears every 2 years for
                                women:
                                30 years and above, PSA for men above 40 years </td>
                            <td>Physical Examination, BMI, Urinalysis, PCV, Blood Pressure, Blood sugar, Genotype, Chest
                                X-ray,
                                ECG, Serum Cholesterol, LFT, E/U/Cr,
                                Annual mammogram, Cervical Smears every 2 years for women: 30 years and above, PSA for men
                                above
                                40 years </td>
                        </tr>
                        <tr>
                            <th>Structured Lifestyle Management Programmes</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Health Nuggets/Talk/Education Forum or Wellness fairs</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>HIV/AIDS- Diagnosis + Treatment at Free Specialist
                                centers’</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th>Renal Dialysis</th>
                            <td> Covered</td>
                            <td> Covered</td>
                            <td> Covered</td>
                        </tr>
                        <tr>
                            <th> Outpatient Psychiatry cover </th>
                            <td>Not Covered</td>
                            <td>1 week</td>
                            <td>2 week</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="container">


        ·      Psychiatric Institutionalization
        ·     Any medical service required or injuries sustained as a result of Military, Para Military or Militant service
        or operations;
        ·      Any medical service required or injuries sustained as a result of Hazardous sports including but not limited
        to water sports,
        mountaineering, hunting, motor racing, riding or driving in any kind of race and professional participation in
        leagues of any sport;
        ·       Any medical service required or injuries sustained as a result of War (declared or undeclared), riot,
        strike, and civil commotion;
        or acts of God or acts of terrorism
        ·         Any medical service required or injuries sustained as a result of Intentional self-injury, suicide or
        attempted suicide (whether sane
        or insane), chronic venereal disease, member’s own criminal act, intoxication, the use of drugs not prescribed by a
        physician or injury sustained
        whilst in a state of insanity, alcoholism or costs resulting from dependency on or abuse of drugs or other addictive
        substances and drug
        rehabilitation
        ·         Consultations or treatment by chiropractors, acupuncturists, herbalists, complimentary/traditional medical
        practitioners or
        unrecognized consultants, hospitals, family doctors, therapists, dental practitioners
        ·         Any medical treatment required, relating to an accident or illness which may have occurred prior to the
        effective date or to
        any illness where it was within the knowledge of a member that was suffering from it at the effective date
        ·         Overseas Treatment/ Investigations
        ·         Organ Surgery and Transplants
        ·         Plastic/Cosmetic Surgeries and/or Treatments
        ·         Embalmment, Autopsies, Mortuary Services
        ·         Cancer Investigation or Treatment such as chemotherapy or radiotherapy
        ·         Investigations not as listed under covered services or Treatments for problems relating to infertility,
        e.g. IVF, GIFT, Artificial
        Insemination; and Virility Enhancing Drugs;
        ·         Neonatal Care not listed under services
        ·         Speech Disorder
        ·         Treatment of Obesity & Weight Loss
        ·         Renal Dialysis UP TO COVERED LIMIT
        ·         Herbal Drugs, Non-Prescription Drugs, Food Supplements, Dietary and Nutrition Supplements, Experimental
        Drugs and Treatments;
        ·         Dental treatment unless otherwise stated to be covered by the specific plan
        ·         Optical services unless otherwise stated to be covered by the specific plan
        ·         Hearing tests or costs of hearing aids
        ·         Any injury, illness or disease specified as an exclusion and complications caused by a condition that is
        excluded or follow up treatments
        or investigations that are due to a condition that is excluded;
        ·         Birth defects, congenital condition or illness, autoimmune disorders, conditions and illnesses related to
        genetic disorders;
        ·         Home Care, Domiciliary Care
        ·         Joint Replacements
        ·         Supply of Prosthesis (Artificial Limbs, Dental Prosthesis)
        ·         Hormonal Replacement Therapy
        ·         All expenses in respect of illnesses/conditions that were subject to waiting periods when the member and
        dependants joined the plan
        ·         Treatment protocols that are not normal, customary or standard practice within Nigeria
        ·         Any condition, treatment, procedure, or service that is related, is in connection with, or is required as
        a follow-up to exclusion.
        ·         Room upgrades beyond that specified in the plan benefits
        ·         Consultations with unrecognized consultants, hospitals, family doctors, therapists, dental practitioners
        or complimentary medicines practitioners
        ·         Any other treatment, service, procedure or investigation not listed in the schedule of covered medical
        services.
    </section>
@endsection
