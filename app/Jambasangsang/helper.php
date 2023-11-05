<?php

namespace App\Jambasangsang;

use Spatie\Permission\Models\Role;

class constPerPageNumber
{
    const All = 100000;
    const Five = 5;
    const Ten = 10;
    const Fifteen = 15;
    const TwentyFive = 25;
    const Fifty = 50;
    const SeventyFive = 75;
    const Hundred = 100;
}
class constPerPageword
{
    const All = 'All';
    const Five = "Five";
    const Ten = 'Ten';
    const Fifteen = 'Fifteen';
    const TwentyFive = 'TwentyFive';
    const Fifty = 'Fifty';
    const SeventyFive = 'SeventyFive';
    const Hundred = 'Hundred';
}
class Helper
{

    public static function getStatusValue(String $status)
    {
        switch ($status) {
            case 0:
                return  "";
                break;

            default:
                return "checked";
                break;
        }
    }
    public static function getGenderValue(String $gender)
    {
        switch ($gender) {
            case 'F':
                return  "Female";
                break;

            default:
                return "Male";
                break;
        }
    }

    public static function getStatus()
    {
        return [
            '' => 'Select',
            '1' => 'Active',
            '0' => 'InActive',
        ];
    }
    public static function getGender()
    {
        return [
            '' => 'Select',
            '1' => 'Male',
            '0' => 'Female',
        ];
    }
    public static function getReligion()
    {
        return [
            '' => 'Select',
            '1' => 'Muslim',
            '2' => 'Christian',
            '3' => 'Hindu',
            '4' => 'Qadiani',
        ];
    }
    public static function Selected($value1,$value2)
    {
        return $value1 == $value2 ? 'selected' : '';
    }
    public static function getRoles()
    {
        return Role::orderBy('id', 'asc')->get(['id', 'name']);
    }

    public static function getPerPageNumber()
    {
        return [
            constPerPageNumber::All => constPerPageWord::All,
            constPerPageNumber::Five => constPerPageWord::Five,
            constPerPageNumber::Ten => constPerPageWord::Ten,
            constPerPageNumber::Fifteen => constPerPageWord::Fifteen,
            constPerPageNumber::TwentyFive => constPerPageWord::TwentyFive,
            constPerPageNumber::SeventyFive => constPerPageWord::SeventyFive,
            constPerPageNumber::Hundred => constPerPageWord::Hundred,
        ];
    }
}
