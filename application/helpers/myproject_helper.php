<?php 

function getDropdownList($table, $columns){

    $CI = & get_instance();
    $query = $CI->db->select($columns)->from($table)->get();

    if($query->numRows() >= 1){
        $option1 = ['' => '- Select -'];
        $option2 = array_column($query->result_array(), $colums[1], $colums[0]);
        $opstons = $option1 + $option2;

        return $opstons;
    }

    return $options = ['' => '- Select -'];
}

function getCategories() {
    $CI = & get_instance();
    $query = $CI->db->get('category')->result();
    return $query;
}

function getCart() {
     $CI = & get_instance();
     $userId = $CI->session->userdata('id');

     if($userId){
         $query = $CI->db->where('id_user', $userId)->count_all_results('cart');
         return $query;
     }

     return false;
}

function hashEncrypt($input){
    $hash = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

function hashDecryptVerify($input, $hash){
    if(password_hash($input, $hash)){
        return true;
    } else {
        return false;
    }
}
?>