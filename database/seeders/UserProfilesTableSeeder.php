<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Ra-ouf',
                'lastname' => 'Jumli',
                'middlename' => 'Indanan',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09171531652',
                'avatar' => 'profile-pictures/EJzSGyLSVR2ccAQOcXPrNesbRpe4eBINbUaGlkos.png',
                'user_id' => 1,
                'created_at' => '2024-07-30 16:19:03',
                'updated_at' => '2025-02-07 16:15:57',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Joefry',
                'lastname' => 'Fernando',
                'middlename' => 'P',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09153907133',
                'avatar' => 'profile-pictures/82ircME1GJTUHewFV2ryWsV1aHufgYkOydziTwuv.png',
                'user_id' => 2,
                'created_at' => '2024-07-30 19:04:54',
                'updated_at' => '2025-02-07 16:27:42',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Jali',
                'lastname' => 'Badiola',
                'middlename' => 'J',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09123456789',
                'avatar' => 'profile-pictures/92ULEbQ6U9fdI0fejKm4Dq1f918pguNtU7TvHhYj.jpg',
                'user_id' => 3,
                'created_at' => '2024-08-03 22:46:56',
                'updated_at' => '2025-02-04 17:06:00',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'Ingrid',
                'lastname' => 'Abella',
                'middlename' => 'T',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09123654789',
                'avatar' => 'profile-pictures/vKK4WX2603DCcsjsgW5u8o0p3em9fzw6jTo78a9t.png',
                'user_id' => 4,
                'created_at' => '2024-08-03 22:47:33',
                'updated_at' => '2024-09-11 04:52:44',
            ),
            4 => 
            array (
                'id' => 5,
                'firstname' => 'Julius',
                'lastname' => 'Fojas',
                'middlename' => 'Taghap',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09668152170',
                'avatar' => 'profile-pictures/byuNSqYOlmIlmogunedNrZv6JAIOlWktBFftGS2y.png',
                'user_id' => 5,
                'created_at' => '2024-09-02 18:54:01',
                'updated_at' => '2025-02-07 16:53:43',
            ),
            5 => 
            array (
                'id' => 6,
                'firstname' => 'Sonora',
                'lastname' => 'Buñag',
                'middlename' => 'Leonora',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09178494346',
                'avatar' => 'profile-pictures/0NtvI0MfFAjvBJVoeJCmbeHUhUnTYHUJhKBwvjoX.jpg',
                'user_id' => 6,
                'created_at' => '2024-09-02 18:54:37',
                'updated_at' => '2024-09-11 04:49:46',
            ),
            6 => 
            array (
                'id' => 7,
                'firstname' => 'Shadam',
                'lastname' => 'Suganob',
                'middlename' => 'Eroy',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09954502887',
                'avatar' => 'profile-pictures/qDMxIQh9vkQvIDrU5CCM3wW9ET0Rg1SwN9gBhPVP.jpg',
                'user_id' => 7,
                'created_at' => '2024-09-02 19:24:53',
                'updated_at' => '2025-02-06 18:56:18',
            ),
            7 => 
            array (
                'id' => 8,
                'firstname' => 'Janice',
                'lastname' => 'Ong',
                'middlename' => 'Tangcalagan',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09954332769',
                'avatar' => 'profile-pictures/rXtJADbeoY59ee6XMInuOav6YJrbYmtwlbjmvvMt.jpg',
                'user_id' => 8,
                'created_at' => '2024-09-09 21:33:21',
                'updated_at' => '2024-09-09 21:43:36',
            ),
            8 => 
            array (
                'id' => 9,
                'firstname' => 'Ellyssa Mae',
                'lastname' => 'Pendergat',
                'middlename' => 'Agan',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09552730938',
                'avatar' => 'profile-pictures/m2UqR9gj0kcGojyYWatG1PZ3Ny6DgjO7L0eiGkuX.png',
                'user_id' => 9,
                'created_at' => '2024-09-09 23:51:20',
                'updated_at' => '2024-09-09 23:52:41',
            ),
            9 => 
            array (
                'id' => 10,
                'firstname' => 'Angelica Joy',
                'lastname' => 'Tubo',
                'middlename' => 'Ando',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09056331091',
                'avatar' => 'profile-pictures/Db820X3I6lnZdHPhL84WJS80YyrKXI01d5k7Cy3N.jpg',
                'user_id' => 10,
                'created_at' => '2024-09-10 17:12:58',
                'updated_at' => '2024-09-10 17:26:16',
            ),
            10 => 
            array (
                'id' => 11,
                'firstname' => 'Ruben',
                'lastname' => 'Lim',
                'middlename' => 'Matchon',
                'suffix' => 'Jr',
                'sex' => 'Male',
                'mobile' => '09176385319',
                'avatar' => 'profile-pictures/svDEu7R1AzOEhihzy0GtS6oioMjYLieDidOVEgNi.png',
                'user_id' => 11,
                'created_at' => '2024-09-10 21:46:32',
                'updated_at' => '2024-09-17 20:04:31',
            ),
            11 => 
            array (
                'id' => 12,
                'firstname' => 'Miguel Louis',
                'lastname' => 'Calunod',
                'middlename' => 'Atilano',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09774758971',
                'avatar' => 'profile-pictures/cdHXaZpWzAFeYNlHF3rATMU2N0NkLVOYovVh8lQP.jpg',
                'user_id' => 12,
                'created_at' => '2024-09-10 22:32:08',
                'updated_at' => '2025-02-07 16:55:32',
            ),
            12 => 
            array (
                'id' => 13,
                'firstname' => 'Kevin Karl',
                'lastname' => 'Ramiso',
                'middlename' => 'Ramos',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09451422986',
                'avatar' => 'profile-pictures/u5pmpdOAYvaNM50SrUocNc1FG700eZ7cNtDXEOG8.jpg',
                'user_id' => 13,
                'created_at' => '2024-09-11 16:54:39',
                'updated_at' => '2024-09-20 21:30:51',
            ),
            13 => 
            array (
                'id' => 14,
                'firstname' => 'Analyn',
                'lastname' => 'Sajiin',
                'middlename' => 'Lasola',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09190715686',
                'avatar' => 'avatar',
                'user_id' => 14,
                'created_at' => '2024-09-11 17:10:03',
                'updated_at' => '2024-09-11 17:10:03',
            ),
            14 => 
            array (
                'id' => 15,
                'firstname' => 'Rufie Mae',
                'lastname' => 'Gansan',
                'middlename' => 'Sumpiao',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09126110482',
                'avatar' => '0',
                'user_id' => 15,
                'created_at' => '2024-09-11 17:31:24',
                'updated_at' => '2025-02-12 21:59:18',
            ),
            15 => 
            array (
                'id' => 16,
                'firstname' => 'Arlene',
                'lastname' => 'Herbieto',
                'middlename' => 'Sabalde',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09052279213',
                'avatar' => 'profile-pictures/LuIE3hFixGaIKSj478IWn2wFzqeO3QzjHc47od80.jpg',
                'user_id' => 16,
                'created_at' => '2024-09-12 16:37:38',
                'updated_at' => '2024-09-17 21:37:57',
            ),
            16 => 
            array (
                'id' => 17,
                'firstname' => 'Ruish Nova',
                'lastname' => 'Jazmin',
                'middlename' => 'Cabico',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09505649797',
                'avatar' => 'profile-pictures/BXbec7NVIL5E6EHlkm9JH1mvlYkJvIY74gcSO1MV.jpg',
                'user_id' => 17,
                'created_at' => '2024-09-13 18:47:26',
                'updated_at' => '2024-09-13 18:50:04',
            ),
            17 => 
            array (
                'id' => 18,
                'firstname' => 'Anna Mae',
                'lastname' => 'Francisco',
                'middlename' => 'Cutib',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09974450326',
                'avatar' => 'avatar',
                'user_id' => 18,
                'created_at' => '2024-09-13 19:05:15',
                'updated_at' => '2024-09-13 19:05:15',
            ),
            18 => 
            array (
                'id' => 19,
                'firstname' => 'Eva Mae',
                'lastname' => 'Villabeto',
                'middlename' => 'AniÑon',
                'suffix' => NULL,
                'sex' => 'Female',
                'mobile' => '09665332245',
                'avatar' => 'profile-pictures/ENL1Whesi5LPUxc0uVqpTbiNnK8CUHQ0zwByxKr3.jpg',
                'user_id' => 19,
                'created_at' => '2024-09-13 23:17:02',
                'updated_at' => '2024-09-13 23:19:59',
            ),
            19 => 
            array (
                'id' => 20,
                'firstname' => 'Noel',
                'lastname' => 'Arquiza',
                'middlename' => 'T.',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09262142321',
                'avatar' => 'profile-pictures/uc5nD3jz24PCHxUb3FhICL33qeH6yDSson1UeB0K.jpg',
                'user_id' => 20,
                'created_at' => '2024-09-17 19:54:59',
                'updated_at' => '2024-09-17 19:58:04',
            ),
            20 => 
            array (
                'id' => 21,
                'firstname' => 'Gian Carlo',
                'lastname' => 'Acejas',
                'middlename' => 'Castillo',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09050633300',
                'avatar' => 'profile-pictures/JcdGbyIZ5VPMHYMEmQrHe97QGTbKfguVEq56l0VO.png',
                'user_id' => 21,
                'created_at' => '2024-09-19 20:52:32',
                'updated_at' => '2025-02-07 16:51:11',
            ),
            21 => 
            array (
                'id' => 22,
                'firstname' => 'Test',
                'lastname' => 'Test',
                'middlename' => 'Test',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09123159753',
                'avatar' => 'avatar',
                'user_id' => 22,
                'created_at' => '2024-12-03 18:23:25',
                'updated_at' => '2024-12-03 18:23:25',
            ),
            22 => 
            array (
                'id' => 23,
                'firstname' => 'Wilfredo',
                'lastname' => 'Alvarez',
                'middlename' => 'P',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09269557259',
                'avatar' => 'avatar',
                'user_id' => 23,
                'created_at' => '2024-12-06 18:55:31',
                'updated_at' => '2024-12-06 18:55:31',
            ),
            23 => 
            array (
                'id' => 24,
                'firstname' => 'Oni Angelo',
                'lastname' => 'Gomez',
                'middlename' => 'Natividad',
                'suffix' => NULL,
                'sex' => 'Male',
                'mobile' => '09453695583',
                'avatar' => 'profile-pictures/jRfKH45pFK9ECLsDYThMOHh62fekwAr3eGEQp6H2.jpg',
                'user_id' => 24,
                'created_at' => '2025-02-06 22:58:53',
                'updated_at' => '2025-02-07 04:11:06',
            ),
        ));

        
    }
}