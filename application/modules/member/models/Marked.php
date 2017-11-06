<?php
class Marked() extends CI_Model {

    var $table = array('member_assets',
                       'marker_polygon',
                       'aauth_accounts',
                       'aauth_member',
                       'master_negara',
                       'master_provinsi',
                       'master_kota',
                       'master_kecamatan',
                       'master_kelurahan',
                       'assets_legality',
                       'assets_existtype',
                       'exist_type');
    var $primary_key = 'id';
    var $column_order = array(null, 'name');
    var $column_search = array('aauth_member'.'pin');
    var $order = array('id' => 'asc');
    var $deleted = array('deleted_at' => DateTime::ATOM);

    /**
     * Generator field for search table
     */
    private function _get_field_query()
    {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item)
        {
            if(!empty($_POST['search']['value']))
            {

                if($i===0)
                {
                    $this->db->group_start();
                    $this->db->like('LOWER(' . $item . ')',strtolower($_POST['search']['value']) );
                }
                else
                {
                    $this->db->or_like('LOWER(' . $item . ')',strtolower($_POST['search']['value']) );
                }

                if(count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if(isset($_POST['order']))
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
}
