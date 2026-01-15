<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #region Regional/District Offices
        Contact::factory()->create([
            'affiliation' => 'TESDA National Capital Region (NCR)',
            'name' => 'ANGELINA M. CARREON',
            'position' => 'Regional Director',
            'address' => 'Bldg 15. TESDA Gate 2 TESDA Complex East Service Rd. South Superhighway, Taguig, Metro Manila',
            'telephone_number' => '8811-3499',
            'email' => 'ncr@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA District Office (CAMANAVA) CALOOCAN, MALABON, NAVOTAS, VALENZUELA',
            'name' => 'VERGEL P. SORIANO',
            'position' => 'District Director',
            'address' => 'C3 Road, corner Virgo Drive, Brgy. NBBS Kaunlaran, Navotas City',
            'telephone_number' => '(0960) 367-0750',
            'email' => 'ncr.camanava@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA District Office (PASMAK) PASAY/MAKATI',
            'name' => 'CARIZA A. DACUMA',
            'position' => 'District Director',
            'address' => 'Bldg 15, TESDA Gate 2 TESDA Complex East Service Rd. South Superhighway, Taguig, Metro Manila',
            'telephone_number' => '8810-5814 / 8277-6384',
            'email' => 'ncr.pasmak@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA District Office MANILA',
            'name' => 'LORRIENNE JUDITH MARIE G. JUANANI',
            'position' => 'District Director, concurrent capacity Assistant Executive Director (CO-PLO/OED)',
            'address' => '2nd Flr. UDM Annex Campus Building, Carlos Palanca Str., corner Helios St., Sta. Cruz, Manila',
            'telephone_number' => '8628-4445 / 8654-5401',
            'email' => 'ncr.manila@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA District Office (MUNTIPARLASTAPAT) MUNTINLUPA, PARANAQUE, LAS PIÑAS, TAGUIG, PATEROS',
            'name' => 'GERARDO A. MERCADO',
            'position' => 'District Director',
            'address' => 'Bldg 8, TESDA Gate 2 TESDA Complex East Service Rd. South Superhighway, Taguig, Metro Manila',
            'telephone_number' => '(0918) 942-2023 / (0917) 192-3023',
            'email' => 'ncr.muntiparlastapat@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA District Office (PAMAMARISAN) Pasig, Mandaluyong, Marikina, San Juan',
            'name' => 'MARIA GRACIA P. DELA RAMA',
            'position' => 'District Director',
            'address' => '2nd Flr. NTTA Bldg. MPC Compound, Meyer Chanyungco St. Sta. Elena, Marikina City',
            'telephone_number' => '7728-8871 / (0917) 597-9005',
            'email' => 'ncr.pamamarisan@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA District Office QUEZON CITY',
            'name' => 'ANGELINE T. CHAVES',
            'position' => 'District Director',
            'address' => 'Bituan St., Cor. Bayani Rd Brgy. Doña Imelda G. Araneta Ave., Quezon City',
            'telephone_number' => '8711-0244 / 8353-8161 / 8285-5363',
            'email' => 'ncr.quezoncity@tesda.gov.ph',
        ]);
        #endregion

        #region Technology Institute
        Contact::factory()->create([
            'affiliation' => 'Regional Training Center - NCR',
            'name' => 'EUGENE P. AGCAOILI',
            'position' => 'Chief, Administrator',
            'address' => 'Bldg. 14, Gate2, TESDA Complex, East Service Road, Taguig, Metro Manila',
            'telephone_number' => '8711-6693 / (0968) 852-8204',
            'email' => 'rtcncr@tesda.gov.ph ',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA-Navotas Training Institute',
            'name' => 'PAUL JOHN P. RAMOS',
            'position' => 'Administrator',
            'address' => 'C3 Road, corner Virgo Drive, Brgy. NBBS Kaunlaran, Navotas City',
            'telephone_number' => '8784-2210 / (0915) 334-5581',
            'email' => 'tnti@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA-Manila District Training and Assessment Center',
            'name' => 'VIGNETTE D. NAVASERO',
            'position' => 'Administrator',
            'address' => '1314 Mahatma Gandhi St., Belen St., Paco Manila',
            'telephone_number' => '8516-8347',
            'email' => 'tmtac@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'MuntiParLasTaPat District Training and Assessment Center',
            'name' => 'MARLON A. FELIX',
            'position' => 'Administrator',
            'address' => 'Bldg. 9, (Formerly Pinoy Bayanihan Project) TESDA Complex, East Service Road, South Luzon Expressway, Taguig City',
            'telephone_number' => '(0917) 845-8926',
            'email' => 'mdtac@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'TESDA-PaMaMariSan Training and Assessment Center',
            'name' => 'LIZA MARIE V. GAWE',
            'position' => 'Acting Administrator',
            'address' => '2nd Flr. NTTA Bldg. MPC Compound, Meyer Chanyungco St. Sta. Elena, Marikina City',
            'telephone_number' => '7001-8774 / (0985) 243-6148 / (0906) 196-9395',
            'email' => 'tptac@tesa.gov.ph.',
        ]);
        Contact::factory()->create([
            'affiliation' => 'Pasay-Makati District Training and Assessment Center',
            'name' => 'VERNADETTE F. GONZALES',
            'position' => 'Administrator',
            'address' => 'Gate 2, TESDA Complex, East Service Road, South Superhighway, Taguig City',
            'telephone_number' => '(0968) 852-4038',
            'email' => 'pmdtac@tesda.gov.ph',
        ]);
        Contact::factory()->create([
            'affiliation' => 'Quezon City Lingkod Bayan Skils Development Center (QCLBSDC)',
            'name' => 'EDMAR JAY O. BLANCO',
            'position' => 'Administrator',
            'address' => 'Brgy. Hall Compound Dahlia Ave. Brgy, Fairview Quezon City',
            'telephone_number' => '7005-9092 / 8286-9548',
            'email' => 'qclbsdc@tesda.gov.ph',
        ]);
        #endregion
    }
}
