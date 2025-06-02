<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();

            $table->string('logo_path')->nullable();
            $table->text('address')->default("403, 4th Floor, Trade World B-wing,\nKamala Mills Compound, Lower Parel,\nMumbai - 40013");
            $table->json('emails')->default(json_encode([
                'milouni@houseofelm.design',
                'swati@houseofelm.design',
                'mahavira@houseofelm.design'
            ]));
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('facsimile')->nullable();
            $table->string('website')->nullable();
            $table->text('remarks')->nullable()->default('This is a preliminary information sheet only and not for construction purposes. Refer to material reference boards & fabric swatch submitted by STUDIO for actual samples. Manufacturer to provide STUDIO with shop drawings and prototype sample pieces for approval prior to production. Manufacturer to work in conjunction with designer to ensure proper proportions & design intent. The furniture, fittings & equipment pieces in this specification book is for design intent only.');

            $table->text('general_notes')->nullable()->default('<div>* Manufacturer to ensure support and stability of product.</div><div>* All construction methods and finishes must be of contract quality suitable for commercial and hospitality use, of new high-grade material, clean and free from defects in material and workmanship/fabrication in accordance with House of Elm.</div><div>* All Local Codes for installation methods and practices must be observed.</div>');

            $table->string('studio_principal_name')->nullable()->default('Milouni Mehta');
            $table->string('drawn_by_name')->nullable();
            $table->string('checked_by_name')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
