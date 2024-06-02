<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Sector;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id('sector_id');
            $table->string('sector_name');
           $table->bigInteger('district_id')->unsigned(); // foreign from districts table
            $table->foreign('district_id')->references('district_id')->on('districts');
            $table->timestamps();
        });
        DB::table('sectors')->insert([
            ['sector_id'=>10101, 'sector_name'=>'Gitega', 'district_id'=>101],
            ['sector_id'=>10102, 'sector_name'=>'Kanyinya', 'district_id'=>101],
            ['sector_id'=>10103, 'sector_name'=>'Kigali', 'district_id'=>101],
            ['sector_id'=>10104, 'sector_name'=>'Kimisagara', 'district_id'=>101],
            ['sector_id'=>10105, 'sector_name'=>'Mageregere', 'district_id'=>101],
            ['sector_id'=>10106, 'sector_name'=>'Muhima', 'district_id'=>101],
            ['sector_id'=>10107, 'sector_name'=>'Nyakabanda', 'district_id'=>101],
            ['sector_id'=>10108, 'sector_name'=>'Nyamirambo', 'district_id'=>101],
            ['sector_id'=>10109, 'sector_name'=>'Nyarugenge', 'district_id'=>101],
            ['sector_id'=>10110, 'sector_name'=>'Rwezamenyo', 'district_id'=>101],
            ['sector_id'=>10201, 'sector_name'=>'Bumbogo', 'district_id'=>102],
            ['sector_id'=>10202, 'sector_name'=>'Gatsata', 'district_id'=>102],
            ['sector_id'=>10203, 'sector_name'=>'Gikomero', 'district_id'=>102],
            ['sector_id'=>10204, 'sector_name'=>'Gisozi', 'district_id'=>102],
            ['sector_id'=>10205, 'sector_name'=>'Jabana', 'district_id'=>102],
            ['sector_id'=>10206, 'sector_name'=>'Jali', 'district_id'=>102],
            ['sector_id'=>10207, 'sector_name'=>'Kacyiru', 'district_id'=>102],
            ['sector_id'=>10208, 'sector_name'=>'Kimihurura', 'district_id'=>102],
            ['sector_id'=>10209, 'sector_name'=>'Kimironko', 'district_id'=>102],
            ['sector_id'=>10210, 'sector_name'=>'Kinyinya', 'district_id'=>102],
            ['sector_id'=>10211, 'sector_name'=>'Ndera', 'district_id'=>102],
            ['sector_id'=>10212, 'sector_name'=>'Nduba', 'district_id'=>102],
            ['sector_id'=>10213, 'sector_name'=>'Remera', 'district_id'=>102],
            ['sector_id'=>10214, 'sector_name'=>'Rusororo', 'district_id'=>102],
            ['sector_id'=>10215, 'sector_name'=>'Rutunga', 'district_id'=>102],
            ['sector_id'=>10301, 'sector_name'=>'Gahanga', 'district_id'=>103],
            ['sector_id'=>10302, 'sector_name'=>'Gatenga', 'district_id'=>103],
            ['sector_id'=>10303, 'sector_name'=>'Gikondo', 'district_id'=>103],
            ['sector_id'=>10304, 'sector_name'=>'Kagarama', 'district_id'=>103],
            ['sector_id'=>10305, 'sector_name'=>'Kanombe', 'district_id'=>103],
            ['sector_id'=>10306, 'sector_name'=>'Kicukiro', 'district_id'=>103],
            ['sector_id'=>10307, 'sector_name'=>'Kigarama', 'district_id'=>103],
            ['sector_id'=>10308, 'sector_name'=>'Masaka', 'district_id'=>103],
            ['sector_id'=>10309, 'sector_name'=>'Niboye', 'district_id'=>103],
            ['sector_id'=>10310, 'sector_name'=>'Nyarugunga', 'district_id'=>103],
            ['sector_id'=>20101, 'sector_name'=>'Busasamana', 'district_id'=>201],
            ['sector_id'=>20102, 'sector_name'=>'Busoro', 'district_id'=>201],
            ['sector_id'=>20103, 'sector_name'=>'Cyabakamyi', 'district_id'=>201],
            ['sector_id'=>20104, 'sector_name'=>'Kibilizi', 'district_id'=>201],
            ['sector_id'=>20105, 'sector_name'=>'Kigoma', 'district_id'=>201],
            ['sector_id'=>20106, 'sector_name'=>'Mukingo', 'district_id'=>201],
            ['sector_id'=>20107, 'sector_name'=>'Muyira', 'district_id'=>201],
            ['sector_id'=>20108, 'sector_name'=>'Ntyazo', 'district_id'=>201],
            ['sector_id'=>20109, 'sector_name'=>'Nyagisozi', 'district_id'=>201],
            ['sector_id'=>20110, 'sector_name'=>'Rwabicuma', 'district_id'=>201],
            ['sector_id'=>20201, 'sector_name'=>'Gikonko', 'district_id'=>202],
            ['sector_id'=>20202, 'sector_name'=>'Gishubi', 'district_id'=>202],
            ['sector_id'=>20203, 'sector_name'=>'Kansi', 'district_id'=>202],
            ['sector_id'=>20204, 'sector_name'=>'Kibirizi', 'district_id'=>202],
            ['sector_id'=>20205, 'sector_name'=>'Kigembe', 'district_id'=>202],
            ['sector_id'=>20206, 'sector_name'=>'Mamba', 'district_id'=>202],
            ['sector_id'=>20207, 'sector_name'=>'Muganza', 'district_id'=>202],
            ['sector_id'=>20208, 'sector_name'=>'Mugombwa', 'district_id'=>202],
            ['sector_id'=>20209, 'sector_name'=>'Mukindo', 'district_id'=>202],
            ['sector_id'=>20210, 'sector_name'=>'Musha', 'district_id'=>202],
            ['sector_id'=>20211, 'sector_name'=>'Ndora', 'district_id'=>202],
            ['sector_id'=>20212, 'sector_name'=>'Nyanza', 'district_id'=>202],
            ['sector_id'=>20213, 'sector_name'=>'Save', 'district_id'=>202],
            ['sector_id'=>20301, 'sector_name'=>'Busanze', 'district_id'=>203],
            ['sector_id'=>20302, 'sector_name'=>'Cyahinda', 'district_id'=>203],
            ['sector_id'=>20303, 'sector_name'=>'Kibeho', 'district_id'=>203],
            ['sector_id'=>20304, 'sector_name'=>'Kivu', 'district_id'=>203],
            ['sector_id'=>20305, 'sector_name'=>'Mata', 'district_id'=>203],
            ['sector_id'=>20306, 'sector_name'=>'Muganza', 'district_id'=>203],
            ['sector_id'=>20307, 'sector_name'=>'Munini', 'district_id'=>203],
            ['sector_id'=>20308, 'sector_name'=>'Ngera', 'district_id'=>203],
            ['sector_id'=>20309, 'sector_name'=>'Ngoma', 'district_id'=>203],
            ['sector_id'=>20310, 'sector_name'=>'Nyabimata', 'district_id'=>203],
            ['sector_id'=>20311, 'sector_name'=>'Nyagisozi', 'district_id'=>203],
            ['sector_id'=>20312, 'sector_name'=>'Ruheru', 'district_id'=>203],
            ['sector_id'=>20313, 'sector_name'=>'Ruramba', 'district_id'=>203],
            ['sector_id'=>20314, 'sector_name'=>'Rusenge', 'district_id'=>203],
            ['sector_id'=>20401, 'sector_name'=>'Gishamvu', 'district_id'=>204],
            ['sector_id'=>20402, 'sector_name'=>'Huye', 'district_id'=>204],
            ['sector_id'=>20403, 'sector_name'=>'Karama', 'district_id'=>204],
            ['sector_id'=>20404, 'sector_name'=>'Kigoma', 'district_id'=>204],
            ['sector_id'=>20405, 'sector_name'=>'Kinazi', 'district_id'=>204],
            ['sector_id'=>20406, 'sector_name'=>'Maraba', 'district_id'=>204],
            ['sector_id'=>20407, 'sector_name'=>'Mbazi', 'district_id'=>204],
            ['sector_id'=>20408, 'sector_name'=>'Mukura', 'district_id'=>204],
            ['sector_id'=>20409, 'sector_name'=>'Ngoma', 'district_id'=>204],
            ['sector_id'=>20410, 'sector_name'=>'Ruhashya', 'district_id'=>204],
            ['sector_id'=>20411, 'sector_name'=>'Rusatira', 'district_id'=>204],
            ['sector_id'=>20412, 'sector_name'=>'Rwaniro', 'district_id'=>204],
            ['sector_id'=>20413, 'sector_name'=>'Simbi', 'district_id'=>204],
            ['sector_id'=>20414, 'sector_name'=>'Tumba', 'district_id'=>204],
            ['sector_id'=>20501, 'sector_name'=>'Buruhukiro', 'district_id'=>205],
            ['sector_id'=>20502, 'sector_name'=>'Cyanika', 'district_id'=>205],
            ['sector_id'=>20503, 'sector_name'=>'Gasaka', 'district_id'=>205],
            ['sector_id'=>20504, 'sector_name'=>'Gatare', 'district_id'=>205],
            ['sector_id'=>20505, 'sector_name'=>'Kaduha', 'district_id'=>205],
            ['sector_id'=>20506, 'sector_name'=>'Kamegeri', 'district_id'=>205],
            ['sector_id'=>20507, 'sector_name'=>'Kibirizi', 'district_id'=>205],
            ['sector_id'=>20508, 'sector_name'=>'Kibumbwe', 'district_id'=>205],
            ['sector_id'=>20509, 'sector_name'=>'Kitabi', 'district_id'=>205],
            ['sector_id'=>20510, 'sector_name'=>'Mbazi', 'district_id'=>205],
            ['sector_id'=>20511, 'sector_name'=>'Mugano', 'district_id'=>205],
            ['sector_id'=>20512, 'sector_name'=>'Musange', 'district_id'=>205],
            ['sector_id'=>20513, 'sector_name'=>'Musebeya', 'district_id'=>205],
            ['sector_id'=>20514, 'sector_name'=>'Mushubi', 'district_id'=>205],
            ['sector_id'=>20515, 'sector_name'=>'Nkomane', 'district_id'=>205],
            ['sector_id'=>20516, 'sector_name'=>'Tare', 'district_id'=>205],
            ['sector_id'=>20517, 'sector_name'=>'Uwinkingi', 'district_id'=>205],
            ['sector_id'=>20601, 'sector_name'=>'Bweramana', 'district_id'=>206],
            ['sector_id'=>20602, 'sector_name'=>'Byimana', 'district_id'=>206],
            ['sector_id'=>20603, 'sector_name'=>'Kabagali', 'district_id'=>206],
            ['sector_id'=>20604, 'sector_name'=>'Kinazi', 'district_id'=>206],
            ['sector_id'=>20605, 'sector_name'=>'Kinihira', 'district_id'=>206],
            ['sector_id'=>20606, 'sector_name'=>'Mbuye', 'district_id'=>206],
            ['sector_id'=>20607, 'sector_name'=>'Mwendo', 'district_id'=>206],
            ['sector_id'=>20608, 'sector_name'=>'Ntongwe', 'district_id'=>206],
            ['sector_id'=>20609, 'sector_name'=>'Ruhango', 'district_id'=>206],
            ['sector_id'=>20701, 'sector_name'=>'Cyeza', 'district_id'=>207],
            ['sector_id'=>20702, 'sector_name'=>'Kabacuzi', 'district_id'=>207],
            ['sector_id'=>20703, 'sector_name'=>'Kibangu', 'district_id'=>207],
            ['sector_id'=>20704, 'sector_name'=>'Kiyumba', 'district_id'=>207],
            ['sector_id'=>20705, 'sector_name'=>'Muhanga', 'district_id'=>207],
            ['sector_id'=>20706, 'sector_name'=>'Mushishiro', 'district_id'=>207],
            ['sector_id'=>20707, 'sector_name'=>'Nyabinoni', 'district_id'=>207],
            ['sector_id'=>20708, 'sector_name'=>'Nyamabuye', 'district_id'=>207],
            ['sector_id'=>20709, 'sector_name'=>'Nyarusange', 'district_id'=>207],
            ['sector_id'=>20710, 'sector_name'=>'Rongi', 'district_id'=>207],
            ['sector_id'=>20711, 'sector_name'=>'Rugendabari', 'district_id'=>207],
            ['sector_id'=>20712, 'sector_name'=>'Shyogwe', 'district_id'=>207],
            ['sector_id'=>20801, 'sector_name'=>'Gacurabwenge', 'district_id'=>208],
            ['sector_id'=>20802, 'sector_name'=>'Karama', 'district_id'=>208],
            ['sector_id'=>20803, 'sector_name'=>'Kayenzi', 'district_id'=>208],
            ['sector_id'=>20804, 'sector_name'=>'Kayumbu', 'district_id'=>208],
            ['sector_id'=>20805, 'sector_name'=>'Mugina', 'district_id'=>208],
            ['sector_id'=>20806, 'sector_name'=>'Musambira', 'district_id'=>208],
            ['sector_id'=>20807, 'sector_name'=>'Ngamba', 'district_id'=>208],
            ['sector_id'=>20808, 'sector_name'=>'Nyamiyaga', 'district_id'=>208],
            ['sector_id'=>20809, 'sector_name'=>'Nyarubaka', 'district_id'=>208],
            ['sector_id'=>20810, 'sector_name'=>'Rugarika', 'district_id'=>208],
            ['sector_id'=>20811, 'sector_name'=>'Rukoma', 'district_id'=>208],
            ['sector_id'=>20812, 'sector_name'=>'Runda', 'district_id'=>208],
            ['sector_id'=>30101, 'sector_name'=>'Bwishyura', 'district_id'=>301],
            ['sector_id'=>30102, 'sector_name'=>'Gashari', 'district_id'=>301],
            ['sector_id'=>30103, 'sector_name'=>'Gishyita', 'district_id'=>301],
            ['sector_id'=>30104, 'sector_name'=>'Gitesi', 'district_id'=>301],
            ['sector_id'=>30105, 'sector_name'=>'Mubuga', 'district_id'=>301],
            ['sector_id'=>30106, 'sector_name'=>'Murambi', 'district_id'=>301],
            ['sector_id'=>30107, 'sector_name'=>'Murundi', 'district_id'=>301],
            ['sector_id'=>30108, 'sector_name'=>'Mutuntu', 'district_id'=>301],
            ['sector_id'=>30109, 'sector_name'=>'Rubengera', 'district_id'=>301],
            ['sector_id'=>30110, 'sector_name'=>'Rugabano', 'district_id'=>301],
            ['sector_id'=>30111, 'sector_name'=>'Ruganda', 'district_id'=>301],
            ['sector_id'=>30112, 'sector_name'=>'Rwankuba', 'district_id'=>301],
            ['sector_id'=>30113, 'sector_name'=>'Twumba', 'district_id'=>301],
            ['sector_id'=>30201, 'sector_name'=>'Boneza', 'district_id'=>302],
            ['sector_id'=>30202, 'sector_name'=>'Gihango', 'district_id'=>302],
            ['sector_id'=>30203, 'sector_name'=>'Kigeyo', 'district_id'=>302],
            ['sector_id'=>30204, 'sector_name'=>'Kivumu', 'district_id'=>302],
            ['sector_id'=>30205, 'sector_name'=>'Manihira', 'district_id'=>302],
            ['sector_id'=>30206, 'sector_name'=>'Mukura', 'district_id'=>302],
            ['sector_id'=>30207, 'sector_name'=>'Murunda', 'district_id'=>302],
            ['sector_id'=>30208, 'sector_name'=>'Musasa', 'district_id'=>302],
            ['sector_id'=>30209, 'sector_name'=>'Mushonyi', 'district_id'=>302],
            ['sector_id'=>30210, 'sector_name'=>'Mushubati', 'district_id'=>302],
            ['sector_id'=>30211, 'sector_name'=>'Nyabirasi', 'district_id'=>302],
            ['sector_id'=>30212, 'sector_name'=>'Ruhango', 'district_id'=>302],
            ['sector_id'=>30213, 'sector_name'=>'Rusebeya', 'district_id'=>302],
            ['sector_id'=>30301, 'sector_name'=>'Bugeshi', 'district_id'=>303],
            ['sector_id'=>30302, 'sector_name'=>'Busasamana', 'district_id'=>303],
            ['sector_id'=>30303, 'sector_name'=>'Cyanzarwe', 'district_id'=>303],
            ['sector_id'=>30304, 'sector_name'=>'Gisenyi', 'district_id'=>303],
            ['sector_id'=>30305, 'sector_name'=>'Kanama', 'district_id'=>303],
            ['sector_id'=>30306, 'sector_name'=>'Kanzenze', 'district_id'=>303],
            ['sector_id'=>30307, 'sector_name'=>'Mudende', 'district_id'=>303],
            ['sector_id'=>30308, 'sector_name'=>'Nyakiriba', 'district_id'=>303],
            ['sector_id'=>30309, 'sector_name'=>'Nyamyumba', 'district_id'=>303],
            ['sector_id'=>30310, 'sector_name'=>'Nyundo', 'district_id'=>303],
            ['sector_id'=>30311, 'sector_name'=>'Rubavu', 'district_id'=>303],
            ['sector_id'=>30312, 'sector_name'=>'Rugerero', 'district_id'=>303],
            ['sector_id'=>30401, 'sector_name'=>'Bigogwe', 'district_id'=>304],
            ['sector_id'=>30402, 'sector_name'=>'Jenda', 'district_id'=>304],
            ['sector_id'=>30403, 'sector_name'=>'Jomba', 'district_id'=>304],
            ['sector_id'=>30404, 'sector_name'=>'Kabatwa', 'district_id'=>304],
            ['sector_id'=>30405, 'sector_name'=>'Karago', 'district_id'=>304],
            ['sector_id'=>30406, 'sector_name'=>'Kintobo', 'district_id'=>304],
            ['sector_id'=>30407, 'sector_name'=>'Mukamira', 'district_id'=>304],
            ['sector_id'=>30408, 'sector_name'=>'Muringa', 'district_id'=>304],
            ['sector_id'=>30409, 'sector_name'=>'Rambura', 'district_id'=>304],
            ['sector_id'=>30410, 'sector_name'=>'Rugera', 'district_id'=>304],
            ['sector_id'=>30411, 'sector_name'=>'Rurembo', 'district_id'=>304],
            ['sector_id'=>30412, 'sector_name'=>'Shyira', 'district_id'=>304],
            ['sector_id'=>30501, 'sector_name'=>'BWIRA', 'district_id'=>305],
            ['sector_id'=>30502, 'sector_name'=>'GATUMBA', 'district_id'=>305],
            ['sector_id'=>30503, 'sector_name'=>'HINDIRO', 'district_id'=>305],
            ['sector_id'=>30504, 'sector_name'=>'KABAYA', 'district_id'=>305],
            ['sector_id'=>30505, 'sector_name'=>'KAGEYO', 'district_id'=>305],
            ['sector_id'=>30506, 'sector_name'=>'KAVUMU', 'district_id'=>305],
            ['sector_id'=>30507, 'sector_name'=>'MATYAZO', 'district_id'=>305],
            ['sector_id'=>30508, 'sector_name'=>'MUHANDA', 'district_id'=>305],
            ['sector_id'=>30509, 'sector_name'=>'MUHORORO', 'district_id'=>305],
            ['sector_id'=>30510, 'sector_name'=>'NDARO', 'district_id'=>305],
            ['sector_id'=>30511, 'sector_name'=>'NGORORERO', 'district_id'=>305],
            ['sector_id'=>30512, 'sector_name'=>'NYANGE', 'district_id'=>305],
            ['sector_id'=>30513, 'sector_name'=>'SOVU', 'district_id'=>305],
            ['sector_id'=>30601, 'sector_name'=>'Bugarama', 'district_id'=>306],
            ['sector_id'=>30602, 'sector_name'=>'Butare', 'district_id'=>306],
            ['sector_id'=>30603, 'sector_name'=>'Bweyeye', 'district_id'=>306],
            ['sector_id'=>30604, 'sector_name'=>'Gashonga', 'district_id'=>306],
            ['sector_id'=>30605, 'sector_name'=>'Giheke', 'district_id'=>306],
            ['sector_id'=>30606, 'sector_name'=>'Gihundwe', 'district_id'=>306],
            ['sector_id'=>30607, 'sector_name'=>'Gikundamvura', 'district_id'=>306],
            ['sector_id'=>30608, 'sector_name'=>'Gitambi', 'district_id'=>306],
            ['sector_id'=>30609, 'sector_name'=>'Kamembe', 'district_id'=>306],
            ['sector_id'=>30610, 'sector_name'=>'Muganza', 'district_id'=>306],
            ['sector_id'=>30611, 'sector_name'=>'Mururu', 'district_id'=>306],
            ['sector_id'=>30612, 'sector_name'=>'Nkanka', 'district_id'=>306],
            ['sector_id'=>30613, 'sector_name'=>'Nkombo', 'district_id'=>306],
            ['sector_id'=>30614, 'sector_name'=>'Nkungu', 'district_id'=>306],
            ['sector_id'=>30615, 'sector_name'=>'Nyakabuye', 'district_id'=>306],
            ['sector_id'=>30616, 'sector_name'=>'Nyakarenzo', 'district_id'=>306],
            ['sector_id'=>30617, 'sector_name'=>'Nzahaha', 'district_id'=>306],
            ['sector_id'=>30618, 'sector_name'=>'Rwimbogo', 'district_id'=>306],
            ['sector_id'=>30701, 'sector_name'=>'Bushekeri', 'district_id'=>307],
            ['sector_id'=>30702, 'sector_name'=>'Bushenge', 'district_id'=>307],
            ['sector_id'=>30703, 'sector_name'=>'Cyato', 'district_id'=>307],
            ['sector_id'=>30704, 'sector_name'=>'Gihombo', 'district_id'=>307],
            ['sector_id'=>30705, 'sector_name'=>'Kagano', 'district_id'=>307],
            ['sector_id'=>30706, 'sector_name'=>'Kanjongo', 'district_id'=>307],
            ['sector_id'=>30707, 'sector_name'=>'Karambi', 'district_id'=>307],
            ['sector_id'=>30708, 'sector_name'=>'Karengera', 'district_id'=>307],
            ['sector_id'=>30709, 'sector_name'=>'Kirimbi', 'district_id'=>307],
            ['sector_id'=>30710, 'sector_name'=>'Macuba', 'district_id'=>307],
            ['sector_id'=>30711, 'sector_name'=>'Mahembe', 'district_id'=>307],
            ['sector_id'=>30712, 'sector_name'=>'Nyabitekeri', 'district_id'=>307],
            ['sector_id'=>30713, 'sector_name'=>'Rangiro', 'district_id'=>307],
            ['sector_id'=>30714, 'sector_name'=>'Ruharambuga', 'district_id'=>307],
            ['sector_id'=>30715, 'sector_name'=>'Shangi', 'district_id'=>307],
            ['sector_id'=>40101, 'sector_name'=>'BASE', 'district_id'=>401],
            ['sector_id'=>40102, 'sector_name'=>'BUREGA', 'district_id'=>401],
            ['sector_id'=>40103, 'sector_name'=>'BUSHOKI', 'district_id'=>401],
            ['sector_id'=>40104, 'sector_name'=>'BUYOGA', 'district_id'=>401],
            ['sector_id'=>40105, 'sector_name'=>'CYINZUZI', 'district_id'=>401],
            ['sector_id'=>40106, 'sector_name'=>'CYUNGO', 'district_id'=>401],
            ['sector_id'=>40107, 'sector_name'=>'KINIHIRA', 'district_id'=>401],
            ['sector_id'=>40108, 'sector_name'=>'KISARO', 'district_id'=>401],
            ['sector_id'=>40109, 'sector_name'=>'MASORO', 'district_id'=>401],
            ['sector_id'=>40110, 'sector_name'=>'MBOGO', 'district_id'=>401],
            ['sector_id'=>40111, 'sector_name'=>'MURAMBI', 'district_id'=>401],
            ['sector_id'=>40112, 'sector_name'=>'NGOMA', 'district_id'=>401],
            ['sector_id'=>40113, 'sector_name'=>'NTARABANA', 'district_id'=>401],
            ['sector_id'=>40114, 'sector_name'=>'RUKOZO', 'district_id'=>401],
            ['sector_id'=>40115, 'sector_name'=>'RUSIGA', 'district_id'=>401],
            ['sector_id'=>40116, 'sector_name'=>'SHYORONGI', 'district_id'=>401],
            ['sector_id'=>40117, 'sector_name'=>'TUMBA', 'district_id'=>401],
            ['sector_id'=>40201, 'sector_name'=>'Busengo ', 'district_id'=>402],
            ['sector_id'=>40202, 'sector_name'=>'Coko ', 'district_id'=>402],
            ['sector_id'=>40203, 'sector_name'=>'Cyabingo ', 'district_id'=>402],
            ['sector_id'=>40204, 'sector_name'=>'Gakenke ', 'district_id'=>402],
            ['sector_id'=>40205, 'sector_name'=>'Gashenyi ', 'district_id'=>402],
            ['sector_id'=>40206, 'sector_name'=>'Janja ', 'district_id'=>402],
            ['sector_id'=>40207, 'sector_name'=>'Kamubuga ', 'district_id'=>402],
            ['sector_id'=>40208, 'sector_name'=>'Karambo ', 'district_id'=>402],
            ['sector_id'=>40209, 'sector_name'=>'Kivuruga ', 'district_id'=>402],
            ['sector_id'=>40210, 'sector_name'=>'Mataba ', 'district_id'=>402],
            ['sector_id'=>40211, 'sector_name'=>'Minazi ', 'district_id'=>402],
            ['sector_id'=>40212, 'sector_name'=>'Mugunga ', 'district_id'=>402],
            ['sector_id'=>40213, 'sector_name'=>'Muhondo ', 'district_id'=>402],
            ['sector_id'=>40214, 'sector_name'=>'Muyongwe ', 'district_id'=>402],
            ['sector_id'=>40215, 'sector_name'=>'Muzo ', 'district_id'=>402],
            ['sector_id'=>40216, 'sector_name'=>'Nemba ', 'district_id'=>402],
            ['sector_id'=>40217, 'sector_name'=>'Ruli ', 'district_id'=>402],
            ['sector_id'=>40218, 'sector_name'=>'Rusasa ', 'district_id'=>402],
            ['sector_id'=>40219, 'sector_name'=>'Rushashi ', 'district_id'=>402],
            ['sector_id'=>40301, 'sector_name'=>'Busogo', 'district_id'=>403],
            ['sector_id'=>40302, 'sector_name'=>'Cyuve', 'district_id'=>403],
            ['sector_id'=>40303, 'sector_name'=>'Gacaca', 'district_id'=>403],
            ['sector_id'=>40304, 'sector_name'=>'Gashaki', 'district_id'=>403],
            ['sector_id'=>40305, 'sector_name'=>'Gataraga', 'district_id'=>403],
            ['sector_id'=>40306, 'sector_name'=>'Kimonyi', 'district_id'=>403],
            ['sector_id'=>40307, 'sector_name'=>'Kinigi', 'district_id'=>403],
            ['sector_id'=>40308, 'sector_name'=>'Muhoza', 'district_id'=>403],
            ['sector_id'=>40309, 'sector_name'=>'Muko', 'district_id'=>403],
            ['sector_id'=>40310, 'sector_name'=>'Musanze', 'district_id'=>403],
            ['sector_id'=>40311, 'sector_name'=>'Nkotsi', 'district_id'=>403],
            ['sector_id'=>40312, 'sector_name'=>'Nyange', 'district_id'=>403],
            ['sector_id'=>40313, 'sector_name'=>'Remera', 'district_id'=>403],
            ['sector_id'=>40314, 'sector_name'=>'Rwaza', 'district_id'=>403],
            ['sector_id'=>40315, 'sector_name'=>'Shingiro', 'district_id'=>403],
            ['sector_id'=>40401, 'sector_name'=>'Bungwe', 'district_id'=>404],
            ['sector_id'=>40402, 'sector_name'=>'Butaro', 'district_id'=>404],
            ['sector_id'=>40403, 'sector_name'=>'Cyanika', 'district_id'=>404],
            ['sector_id'=>40404, 'sector_name'=>'Cyeru', 'district_id'=>404],
            ['sector_id'=>40405, 'sector_name'=>'Gahunga', 'district_id'=>404],
            ['sector_id'=>40406, 'sector_name'=>'Gatebe', 'district_id'=>404],
            ['sector_id'=>40407, 'sector_name'=>'Gitovu', 'district_id'=>404],
            ['sector_id'=>40408, 'sector_name'=>'Kagogo', 'district_id'=>404],
            ['sector_id'=>40409, 'sector_name'=>'Kinoni', 'district_id'=>404],
            ['sector_id'=>40410, 'sector_name'=>'Kinyababa', 'district_id'=>404],
            ['sector_id'=>40411, 'sector_name'=>'Kivuye', 'district_id'=>404],
            ['sector_id'=>40412, 'sector_name'=>'Nemba', 'district_id'=>404],
            ['sector_id'=>40413, 'sector_name'=>'Rugarama', 'district_id'=>404],
            ['sector_id'=>40414, 'sector_name'=>'Rugengabari', 'district_id'=>404],
            ['sector_id'=>40415, 'sector_name'=>'Ruhunde', 'district_id'=>404],
            ['sector_id'=>40416, 'sector_name'=>'Rusarabuye', 'district_id'=>404],
            ['sector_id'=>40417, 'sector_name'=>'Rwerere', 'district_id'=>404],
            ['sector_id'=>40501, 'sector_name'=>'Bukure', 'district_id'=>405],
            ['sector_id'=>40502, 'sector_name'=>'Bwisige', 'district_id'=>405],
            ['sector_id'=>40503, 'sector_name'=>'Byumba', 'district_id'=>405],
            ['sector_id'=>40504, 'sector_name'=>'Cyumba', 'district_id'=>405],
            ['sector_id'=>40505, 'sector_name'=>'Giti', 'district_id'=>405],
            ['sector_id'=>40506, 'sector_name'=>'Kageyo', 'district_id'=>405],
            ['sector_id'=>40507, 'sector_name'=>'Kaniga', 'district_id'=>405],
            ['sector_id'=>40508, 'sector_name'=>'Manyagiro', 'district_id'=>405],
            ['sector_id'=>40509, 'sector_name'=>'Miyove', 'district_id'=>405],
            ['sector_id'=>40510, 'sector_name'=>'Mukarange', 'district_id'=>405],
            ['sector_id'=>40511, 'sector_name'=>'Muko', 'district_id'=>405],
            ['sector_id'=>40512, 'sector_name'=>'Mutete', 'district_id'=>405],
            ['sector_id'=>40513, 'sector_name'=>'Nyamiyaga', 'district_id'=>405],
            ['sector_id'=>40514, 'sector_name'=>'Nyankenke', 'district_id'=>405],
            ['sector_id'=>40515, 'sector_name'=>'Rubaya', 'district_id'=>405],
            ['sector_id'=>40516, 'sector_name'=>'Rukomo', 'district_id'=>405],
            ['sector_id'=>40517, 'sector_name'=>'Rushaki', 'district_id'=>405],
            ['sector_id'=>40518, 'sector_name'=>'Rutare', 'district_id'=>405],
            ['sector_id'=>40519, 'sector_name'=>'Ruvune', 'district_id'=>405],
            ['sector_id'=>40520, 'sector_name'=>'Rwamiko', 'district_id'=>405],
            ['sector_id'=>40521, 'sector_name'=>'Shangasha', 'district_id'=>405],
            ['sector_id'=>50101, 'sector_name'=>'Fumbwe', 'district_id'=>501],
            ['sector_id'=>50102, 'sector_name'=>'Gahengeri', 'district_id'=>501],
            ['sector_id'=>50103, 'sector_name'=>'Gishali', 'district_id'=>501],
            ['sector_id'=>50104, 'sector_name'=>'Karenge', 'district_id'=>501],
            ['sector_id'=>50105, 'sector_name'=>'Kigabiro', 'district_id'=>501],
            ['sector_id'=>50106, 'sector_name'=>'Muhazi', 'district_id'=>501],
            ['sector_id'=>50107, 'sector_name'=>'Munyaga', 'district_id'=>501],
            ['sector_id'=>50108, 'sector_name'=>'Munyiginya', 'district_id'=>501],
            ['sector_id'=>50109, 'sector_name'=>'Musha', 'district_id'=>501],
            ['sector_id'=>50110, 'sector_name'=>'Muyumbu', 'district_id'=>501],
            ['sector_id'=>50111, 'sector_name'=>'Mwulire', 'district_id'=>501],
            ['sector_id'=>50112, 'sector_name'=>'Nyakaliro', 'district_id'=>501],
            ['sector_id'=>50113, 'sector_name'=>'Nzige', 'district_id'=>501],
            ['sector_id'=>50114, 'sector_name'=>'Rubona', 'district_id'=>501],
            ['sector_id'=>50201, 'sector_name'=>'GATUNDA', 'district_id'=>502],
            ['sector_id'=>50202, 'sector_name'=>'KARAMA', 'district_id'=>502],
            ['sector_id'=>50203, 'sector_name'=>'KARANGAZI', 'district_id'=>502],
            ['sector_id'=>50204, 'sector_name'=>'KATABAGEMU', 'district_id'=>502],
            ['sector_id'=>50205, 'sector_name'=>'KIYOMBE', 'district_id'=>502],
            ['sector_id'=>50206, 'sector_name'=>'MATIMBA', 'district_id'=>502],
            ['sector_id'=>50207, 'sector_name'=>'MIMURI', 'district_id'=>502],
            ['sector_id'=>50208, 'sector_name'=>'MUKAMA', 'district_id'=>502],
            ['sector_id'=>50209, 'sector_name'=>'MUSHERI', 'district_id'=>502],
            ['sector_id'=>50210, 'sector_name'=>'NYAGATARE', 'district_id'=>502],
            ['sector_id'=>50211, 'sector_name'=>'RUKOMO', 'district_id'=>502],
            ['sector_id'=>50212, 'sector_name'=>'RWEMPASHA', 'district_id'=>502],
            ['sector_id'=>50213, 'sector_name'=>'RWIMIYAGA', 'district_id'=>502],
            ['sector_id'=>50214, 'sector_name'=>'TABAGWE', 'district_id'=>502],
            ['sector_id'=>50301, 'sector_name'=>'Gasange', 'district_id'=>503],
            ['sector_id'=>50302, 'sector_name'=>'Gatsibo', 'district_id'=>503],
            ['sector_id'=>50303, 'sector_name'=>'Gitoki', 'district_id'=>503],
            ['sector_id'=>50304, 'sector_name'=>'Kabarore', 'district_id'=>503],
            ['sector_id'=>50305, 'sector_name'=>'Kageyo', 'district_id'=>503],
            ['sector_id'=>50306, 'sector_name'=>'Kiramuruzi', 'district_id'=>503],
            ['sector_id'=>50307, 'sector_name'=>'Kiziguro', 'district_id'=>503],
            ['sector_id'=>50308, 'sector_name'=>'Muhura', 'district_id'=>503],
            ['sector_id'=>50309, 'sector_name'=>'Murambi', 'district_id'=>503],
            ['sector_id'=>50310, 'sector_name'=>'Ngarama', 'district_id'=>503],
            ['sector_id'=>50311, 'sector_name'=>'Nyagihanga', 'district_id'=>503],
            ['sector_id'=>50312, 'sector_name'=>'Remera', 'district_id'=>503],
            ['sector_id'=>50313, 'sector_name'=>'Rugarama', 'district_id'=>503],
            ['sector_id'=>50314, 'sector_name'=>'Rwimbogo', 'district_id'=>503],
            ['sector_id'=>50401, 'sector_name'=>'Gahini', 'district_id'=>504],
            ['sector_id'=>50402, 'sector_name'=>'Kabare', 'district_id'=>504],
            ['sector_id'=>50403, 'sector_name'=>'Kabarondo', 'district_id'=>504],
            ['sector_id'=>50404, 'sector_name'=>'Mukarange', 'district_id'=>504],
            ['sector_id'=>50405, 'sector_name'=>'Murama', 'district_id'=>504],
            ['sector_id'=>50406, 'sector_name'=>'Murundi', 'district_id'=>504],
            ['sector_id'=>50407, 'sector_name'=>'Mwiri', 'district_id'=>504],
            ['sector_id'=>50408, 'sector_name'=>'Ndego', 'district_id'=>504],
            ['sector_id'=>50409, 'sector_name'=>'Nyamirama', 'district_id'=>504],
            ['sector_id'=>50410, 'sector_name'=>'Rukara', 'district_id'=>504],
            ['sector_id'=>50411, 'sector_name'=>'Ruramira', 'district_id'=>504],
            ['sector_id'=>50412, 'sector_name'=>'Rwinkwavu', 'district_id'=>504],
            ['sector_id'=>50501, 'sector_name'=>'Gahara', 'district_id'=>505],
            ['sector_id'=>50502, 'sector_name'=>'Gatore', 'district_id'=>505],
            ['sector_id'=>50503, 'sector_name'=>'Kigarama', 'district_id'=>505],
            ['sector_id'=>50504, 'sector_name'=>'Kigina', 'district_id'=>505],
            ['sector_id'=>50505, 'sector_name'=>'Kirehe', 'district_id'=>505],
            ['sector_id'=>50506, 'sector_name'=>'Mahama', 'district_id'=>505],
            ['sector_id'=>50507, 'sector_name'=>'Mpanga', 'district_id'=>505],
            ['sector_id'=>50508, 'sector_name'=>'Musaza', 'district_id'=>505],
            ['sector_id'=>50509, 'sector_name'=>'Mushikiri', 'district_id'=>505],
            ['sector_id'=>50510, 'sector_name'=>'Nasho', 'district_id'=>505],
            ['sector_id'=>50511, 'sector_name'=>'Nyamugari', 'district_id'=>505],
            ['sector_id'=>50512, 'sector_name'=>'Nyarubuye', 'district_id'=>505],
            ['sector_id'=>50601, 'sector_name'=>'Gashanda', 'district_id'=>506],
            ['sector_id'=>50602, 'sector_name'=>'Jarama', 'district_id'=>506],
            ['sector_id'=>50603, 'sector_name'=>'Karembo', 'district_id'=>506],
            ['sector_id'=>50604, 'sector_name'=>'Kazo', 'district_id'=>506],
            ['sector_id'=>50605, 'sector_name'=>'Kibungo', 'district_id'=>506],
            ['sector_id'=>50606, 'sector_name'=>'Mugesera', 'district_id'=>506],
            ['sector_id'=>50607, 'sector_name'=>'Murama', 'district_id'=>506],
            ['sector_id'=>50608, 'sector_name'=>'Mutenderi', 'district_id'=>506],
            ['sector_id'=>50609, 'sector_name'=>'Remera', 'district_id'=>506],
            ['sector_id'=>50610, 'sector_name'=>'Rukira', 'district_id'=>506],
            ['sector_id'=>50611, 'sector_name'=>'Rukumberi', 'district_id'=>506],
            ['sector_id'=>50612, 'sector_name'=>'Rurenge', 'district_id'=>506],
            ['sector_id'=>50613, 'sector_name'=>'Sake', 'district_id'=>506],
            ['sector_id'=>50614, 'sector_name'=>'Zaza', 'district_id'=>506],
            ['sector_id'=>50701, 'sector_name'=>'Gashora', 'district_id'=>507],
            ['sector_id'=>50702, 'sector_name'=>'Juru', 'district_id'=>507],
            ['sector_id'=>50703, 'sector_name'=>'Kamabuye', 'district_id'=>507],
            ['sector_id'=>50704, 'sector_name'=>'Mareba', 'district_id'=>507],
            ['sector_id'=>50705, 'sector_name'=>'Mayange', 'district_id'=>507],
            ['sector_id'=>50706, 'sector_name'=>'Musenyi', 'district_id'=>507],
            ['sector_id'=>50707, 'sector_name'=>'Mwogo', 'district_id'=>507],
            ['sector_id'=>50708, 'sector_name'=>'Ngeruka', 'district_id'=>507],
            ['sector_id'=>50709, 'sector_name'=>'Ntarama', 'district_id'=>507],
            ['sector_id'=>50710, 'sector_name'=>'Nyamata', 'district_id'=>507],
            ['sector_id'=>50711, 'sector_name'=>'Nyarugenge', 'district_id'=>507],
            ['sector_id'=>50712, 'sector_name'=>'Rilima', 'district_id'=>507],
            ['sector_id'=>50713, 'sector_name'=>'Ruhuha', 'district_id'=>507],
            ['sector_id'=>50714, 'sector_name'=>'Rweru', 'district_id'=>507],
            ['sector_id'=>50715, 'sector_name'=>'Shyara', 'district_id'=>507],
            ['sector_id'=>50716, 'sector_name'=>'Gatore', 'district_id'=>505]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
};
