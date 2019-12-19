<?php
class Home_model extends CI_model
{


    public function get_all_featured_product()
    {
        $this->db->select('*,produk as pstatus');
        $this->db->from('produk');
        // $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        // $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        // $this->db->order_by('tbl_product.product_id', 'DESC');
        // $this->db->where('tbl_product.publication_status', 1);
        // $this->db->where('product_feature', 1);
        // $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }
}
