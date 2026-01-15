@section('title', 'Assessment and Certification | TESDA-NCR')

<x-layout>
    <section class="relative h-[240px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">Assessment and Certification</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl text-justify font-sans leading-relaxed w-full space-y-5">
                <p>
                    TESDA pursues the assessment and certification of the competencies of the middle-level skilled workers through 
                    Philippine TVET Competency Assessment and Certification System (PTCACS). The assessment process seeks to determine whether the graduate or worker 
                    can perform to the standards expected in the workplace based on the defined competency standards. Certification is provided to those who meets 
                    the competency standards. This ensures the productivity, quality and global competitiveness of the middle-level workers.
                </p>
                <p>TESDA has a Registry of Certified Workers which provides information on the pool of certified workers for certain occupations nationwide.</p>
                <p>TESDA also has accredited assessment centers as well as the competency assessors who conduct competency assessment process for persons applying for certification.</p>
                <p class="text-blue-600 hover:underline">
                    <a href="https://www.tesda.gov.ph/About/TESDA/127" target="_blank" rel="noopener noreferrer">
                        Click here to view the FREQUENTLY ASKED QUESTIONS (FAQs) and ANSWERS ON THE TESDA ASSESSMENT AND CERTIFICATION PROGRAM
                    </a>
                </p>
                <ol class="list-[lower-alpha] list-inside font-medium space-y-2">
                    <li>
                        <span class="px-2">
                            General Requirements and Procedures in Applying for Assessment and Certification (National Certificate (NC) / Certificate of Competency (COC))
                        </span>
                        <ol class="list-decimal list-inside font-normal ml-7 space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/About/TESDA/46" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">New Applicant</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/About/TESDA/46" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">Renewal</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/About/TESDA/46" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">Lost/Damaged Certificate</span>
                                </a>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <span class="px-2">Lists</span>
                        <ol class="list-decimal list-inside font-normal ml-7 space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/AssessmentCenters" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">List of TESDA Accredited Assessment Centers</span>
                                </a>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <span class="px-2">Online Verification Registries</span>
                        <ol class="list-decimal list-inside font-normal ml-7 space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/rwac" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">Registry of Certified Workers 2016 Issuances and Earlier</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://tesda.gov.ph/Rwac/Rwac2017" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">Registry of Certified Workers 2017 Issuances and Up</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://tesda.gov.ph/NTTC" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">Registry of TESDA Accredited Trainers with NTTC</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://tesda.gov.ph/CA" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline px-2">Registry of TESDA Accredited Assessors</span>
                                </a>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
    </section>
</x-layout>