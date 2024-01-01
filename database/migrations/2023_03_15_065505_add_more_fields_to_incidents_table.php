<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('incidents', function (Blueprint $table) {
            $table->string('type')->after('incident_report_no');
            $table->string('location')->after('type');
            $table->string('incident_date_detected')->after('location');
            $table->string('incident_date_reported')->after('incident_date_detected');
            $table->string('description')->after('incident_date_reported');
            $table->string('initial_response')->after('description');
            $table->string('incidence_reported_by_name')->after('initial_response');
            $table->string('incidence_reported_by_department')->after('incidence_reported_by_name');
            $table->string('incidence_reported_from_contact')->after('incidence_reported_by_department');
            $table->string('incidence_reported_from_email')->after('incidence_reported_from_contact');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('incidents', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('location');
            $table->dropColumn('incident_date_detected');
            $table->dropColumn('incident_date_reported');
            $table->dropColumn('description');
            $table->dropColumn('initial_response');
            $table->dropColumn('incidence_reported_by_name');
            $table->dropColumn('incidence_reported_by_department');
            $table->dropColumn('incidence_reported_from_contact');
            $table->dropColumn('incidence_reported_from_email');
            
        });
    }
};
