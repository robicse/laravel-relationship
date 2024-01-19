<?php
    namespace App\Http\Traits;
    use App\Models\Setting;
    trait BusinessSettingTrait {
        public function getSetting() {
            // Fetch the setting from the 'setting' table.
            return Setting::first();
        }
    }
?>
