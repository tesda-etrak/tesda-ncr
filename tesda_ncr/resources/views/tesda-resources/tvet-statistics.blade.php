@section('title', 'TVET Statistics | TESDA-NCR')

<x-layout>
    <section class="relative h-[200px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">TVET Statistics</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p>
                    Philippine TVET Statistics contains historical data on TVET outputs specifically on enrolment, graduates, assessment, and certification. 
                    It includes education and employment-related statistics which were processed and monitored to serve as inputs to policy formulation and 
                    program development. The data sets on population, labor, and employment, and basic education were sourced from other government agencies.
                </p>
                <p>
                    It is useful resource material for policymakers, administrators, and planning of TVET institutions, training partners in the LGUs, 
                    non-government organizations, researchers, and students in relevant educational fields.
                </p>
                <div>
                    <p class="font-semibold">Various TVET Statistics</p>
                    <div class="my-3">
                        <p class="font-semibold">2024</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/1_TESDA_2024%20Enrolled%20and%20Graduates%20by%20Region%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Enrolled and Graduates by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/2_TESDA_2024%20Enrolled%20and%20Graduates%20by%20Province%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Enrolled and Graduates by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/3_TESDA_2024%20Enrolled%20and%20Graduates%20by%20Sector%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Enrolled and Graduates by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/4_TESDA_2024%20Assessed%20and%20Certified%20by%20Region%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Assessed and Certified by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/5_TESDA_2024%20Assessed%20and%20Certified%20by%20Province%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Assessed and Certified by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/6_TESDA_2024%20Assessed%20and%20Certified%20by%20Sector%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Assessed and Certified by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/7_TESDA_2024%20Number%20of%20Registered%20Programs%20and%20TVET%20Provider%20by%20Region.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Registered Programs and TVET Provider by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/8_TESDA_2024%20Number%20of%20Registered%20Programs%20and%20TVET%20Provider%20by%20Province.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Registered Programs and TVET Provider by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/9_TESDA_2024%20Number%20of%20Registered%20Programs%20and%20TVET%20Provider%20by%20Sector.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Registered Programs and TVET Provider by Sector</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/10_TESDA_2024%20Number%20of%20TVET%20Provider%20by%20Type%20of%20Provider,%20by%20Region.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of TVET Provider by Type of Provider, by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/11_TESDA_2024%20Number%20of%20TVET%20Provider%20by%20Type%20of%20Provider,%20by%20Province.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of TVET Provider by Type of Provider, by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2024/12_TESDA_2024%20Number%20of%20Enrolled%20and%20Graduates%20(TM)%20by%20Province.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Enrolled and Graduates (TM) by Province</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2023</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/1_TESDA_2023%20Enrolled%20and%20Graduates%20by%20Region%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Enrolled and Graduates by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/2_TESDA_2023%20Enrolled%20and%20Graduates%20by%20Province%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Enrolled and Graduates by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/3_TESDA_2023%20Enrolled%20and%20Graduates%20by%20Sector%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Enrolled and Graduates by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/4_TESDA_2023%20Assessed%20and%20Certified%20by%20Region%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Assessed and Certified by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/5_TESDA_2023%20Assessed%20and%20Certified%20by%20Province%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Assessed and Certified by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/5_TESDA_2023%20Assessed%20and%20Certified%20by%20Province%20and%20Sex.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Assessed and Certified by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/7_TESDA_2023%20Number%20of%20Registered%20Programs%20and%20TVET%20Provider%20by%20Region.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Registered Programs and TVET Provider by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/8_TESDA_2023%20Number%20of%20Registered%20Programs%20and%20TVET%20Provider%20by%20Province.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Registered Programs and TVET Provider by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/9_TESDA_2023%20Number%20of%20Registered%20Programs%20and%20TVET%20Provider%20by%20Sector.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Registered Programs and TVET Provider by Sector</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/10_TESDA_2023%20Number%20of%20TVET%20Provider%20by%20Type%20of%20Provider,%20by%20Region.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of TVET Provider by Type of Provider, by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/11_TESDA_2023%20Number%20of%20TVET%20Provider%20by%20Type%20of%20Provider,%20by%20Province.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of TVET Provider by Type of Provider, by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/TVET%20Statistics/Various/2023/12_TESDA_2023%20Number%20of%20Enrolled%20and%20Graduates%20(TM)%20by%20Province.xlsx" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Enrolled and Graduates (TM) by Province</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p class="font-semibold">Annual Report</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/Annual%20Report/2024%20TVET%20STATISTICS.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2024</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/Annual%20Report/24.03.25%20ANNUAL%20TVET%20Statistics%202023.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2023</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Annual%20Report/2022%20TVET%20Statistics%20Annual%20Report.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2022</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Annual%20Report/ANNUAL-TVET-Stat-2021-1.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2021</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/21.04.29_2020-Annual-TVET-Statistics_v-1.5.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2020</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">Quarter Report</p>
                    <div class="my-3">
                        <p class="font-semibold">2024</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Statistics/24.12.27_%204th%20Quarter%20TVET%20Statistics.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Statistics/24.11.25_%203rd%20Quarter%20TVET%20Statistics%20-%20Copy%201.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Statistics/24.07.22%202nd%20Quarter%20TVET%20Statistics.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Statistics/24.05.16%201st%20Quarter%20TVET%20Statistics.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2023</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2023/TVET%20Statistics/Final%202nd%20Quarter%20TVET%20Statistics%202023.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2023 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Quarterly%20Report/Final%201st%20Quarter%20TVET%20Statistics%202023.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2023 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2022</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Quarterly%20Report/4th-Quarter-TVET-Statistics-2022.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Quarterly%20Report/3rd-Quarter-TVET-Statistics-2022-1.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Quarterly%20Report/2nd-Quarter-TVET-Statistics-2022.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/Quarterly%20Report/1st-Quarter-TVET-Statistics-2022-1.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2021</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2021/TVET/22.01.12_2021-Q4_TVET-Stat.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2021/TVET/V3_21.12.28_TVET-Statistics_3rd-Quarter-2021_Final.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2021/TVET/21.09.19_2021-Q2_TVET-Statistics-Report_v3.0.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2021/TVET/21.05.11_2021-Q1_TVET-Statistics-Report_v3.0.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2020</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/20.12.23_REVISED_4Q_TVET-Statistics-Report_Draft-2.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/20.12.03_Q3-TVET-Statistics-2020_Report.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/20.08.05_Final_TVET-Statistics_Q2-Report_for_Posting.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/1Q_2020%20TVET%20Statistics.pdf" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p class="font-semibold">TVET Fact Sheet</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Fact%20Sheet/2020-2024%20TVET%20Factsheet.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2020-2024 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Fact%20Sheet/24.06.02_TVET%20Fact%20Sheet%20(2019-2023)%20Report.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2019-2023 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2024/TVET%20Fact%20Sheet/TVET%20Fact%20Sheet%20(2018-2022)%20Report-.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2018-2022 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/TVET%20Fact%20Sheet/TVET-Fact-Sheet-2017-2021-Report-4.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2017-2021 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/TVET%20Fact%20Sheet/21.08.25_V2_Revised_TVET-Fact-Sheet_2016-2020.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2016-2020 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2022/TVET%20Fact%20Sheet/21.03.11_REVISED_2015-2019-Fact-Sheet_FINAL.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2015-2019 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">TVET Trends</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/21.04.29_2020-Annual-TVET-Statistics_v-1.5.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2020</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/21.03.11_TVET-Statistics_2017-2019_FINAL.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2017-2019</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2020/TVETStats/21.03.11_REVISED_2015-2019-Fact-Sheet_FINAL.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2015-2019</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/TVETStats/TVET%20Statistics%202014%202016%20rev6%202%203%207%202018.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2014-2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2015/TVETSTAT/Philippine-TVET-Statistics2008-2013-%20FINAL.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2008-2013</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2012/TVETSTAT/Philippine%20TVET%20Statistics2005-2011final%20(cleandata)revised9-25-12a.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2005-2011</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">National Accomplishment on Assessment and Certification</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/National%20Accomplishment/January%202021%20A&C%20National%20Accomplishment.xlsx" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">January 1-31, 2021</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout>