<?php

namespace App\Repositories;

use App\Models\Setting;
use App\Repositories\Traits\ModelRepositoryTraits;
use Illuminate\Support\Facades\Cache;

class SettingRepository
{
    use ModelRepositoryTraits;

    protected $model;

    public function __construct(Setting $setting)
    {
        $this->model = $setting;
    }

    /**
     * Get setting by group
     */
    private function getSettingByGroup($groupName): array
    {

        $settings = $this->model->where('setting_group', $groupName)->get();
        $data = [];
        foreach ($settings as $setting) {
            $data[$setting->setting_key] = $setting->setting_value;
        }

        return $data;
    }

    /**
     * Get site settings
     */
    public function getSiteSettings(): array
    {
        return [
            'general' => $this->getSettingByGroup('general_settings'),
            'sidebar' => $this->getSettingByGroup('sidebar_settings'),
            'footer' => $this->getSettingByGroup('footer_settings'),
            'contact' => $this->getSettingByGroup('contact_settings'),
            'subscriber' => $this->getSettingByGroup('subscribe_settings'),
            'social_links' => $this->getSettingByGroup('social_settings'),
            'custom_css' => $this->getSettingByGroup('custom_css'),
        ];
    }

    /**
     * Update setting by group
     */
    public function updateSettingByGroup($settingGroup, array $values = []): void
    {
        $settingKeys = array_keys($values);
        foreach ($settingKeys as $settingKey) {
            $this->model->updateOrCreate(
                ['setting_key' => $settingKey, 'setting_group' => $settingGroup],
                ['setting_value' => $values[$settingKey]]
            );
            Cache::forget('settings:'.$settingKey);
        }
    }

    /**
     * Store theme data
     */
    public function storeThemeData($themeData): void
    {
        $activeTheme = Setting::pull('active_theme');
        $selectedTheme = '';
        switch ($activeTheme) {
            case 'default':
                $selectedTheme = 'default_theme_data';
                break;
            case 'photography_agency':
                $selectedTheme = 'photography_agency_theme_data';
                break;
            case 'creative_portfolio':
                $selectedTheme = 'creative_portfolio_theme_data';
                break;
            case 'digital_agency':
                $selectedTheme = 'digital_agency_theme_data';
                break;
            case 'marketing_agency':
                $selectedTheme = 'marketing_agency_theme_data';
                break;
            case 'showcase_portfolio':
                $selectedTheme = 'showcase_portfolio_theme_data';
                break;
            case 'case_study_showcase':
                $selectedTheme = 'case_study_showcase_theme_data';
                break;
            default:
                $homeData = '';
        }
        $this->updateSettingByGroup('theme_settings', [$selectedTheme => $themeData]);
    }
}
