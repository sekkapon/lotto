<?php

namespace App\Models;

use CodeIgniter\Model;

$this->DB = \Config\Database::connect();
class My_query extends Model
{

    public function selectData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'tb_users',
        //     'selectData' => [
        //         '*'
        //     ],
        //     'whereData' => [
        //         'system_name' => $system_name
        //     ],
        //     'orderBy' => [
        //         'keyOrderBy' => 'user_id',
        //         'sortBy' => 'ASC',
        //     ],
        //     'limit' => [
        //         'limitCount' => 50,
        //         'startAt' => 0
        //     ]
        // );
        return $this->DB->table($dataQuery['tableDB'])
            ->select($dataQuery['selectData'])->where($dataQuery['whereData'])
            ->orderBy($dataQuery['orderBy']['keyOrderBy'], $dataQuery['orderBy']['sortBy'])
            ->limit($dataQuery['limit']['limitCount'], $dataQuery['limit']['startAt'])
            ->get()->getResultArray();
    }

    public function selectDataRow($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'tb_menu_setting',
        //     'selectData' => [
        //         'topic_menu', 'name_menu',
        //     ],
        //     'whereData' => [],
        //     'orderBy' => [
        //         'keyOrderBy' => 'menu_id',
        //         'sortBy' => 'ASC',
        //     ],
        // );
        return $this->DB->table($dataQuery['tableDB'])
            ->select($dataQuery['selectData'])
            ->where($dataQuery['whereData'])
            ->orderBy($dataQuery['orderBy']['keyOrderBy'], $dataQuery['orderBy']['sortBy'])
            ->get()->getRow();
    }
    public function selecWhereAndOrWheretData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'tb_agent',
        //     'selectData' => [
        //         'system_name', 'agent_id',
        //     ],
        //     'whereData' => [
        //         'agent_id' => 1,
        //     ],
        //     'orWhere' => [
        //         'agent_id' => 2,
        //     ],
        //     'orderBy' => [
        //         'keyOrderBy' => 'agent_id',
        //         'sortBy' => 'ASC',
        //     ],
        //     'limit' => [
        //         'limitCount' => 50,
        //         'startAt' => 0
        //     ]
        // );
        return $this->DB->table($dataQuery['tableDB'])
            ->select($dataQuery['selectData'])->where($dataQuery['whereData'])
            ->orWhere($dataQuery['orWhere'])->orderBy($dataQuery['orderBy']['keyOrderBy'], $dataQuery['orderBy']['sortBy'])
            ->limit($dataQuery['limit']['limitCount'], $dataQuery['limit']['startAt'])
            ->get()->getResultArray();
    }

    public function selectDataArr($dataQuery)
    {
        // $dataQuery = [
        //     'tableDB' => 'tb_agent',
        //     'selectData' => [
        //         'system_name',
        //     ],
        //     'whereData' => $where['key'],
        //     'DataArr' => $where['arr'],
        //     'orderBy' => [
        //         'keyOrderBy' => 'agent_id',
        //         'sortBy' => 'ASC',
        //     ],
        // ];
        return $this->DB->table($dataQuery['tableDB'])
            ->select($dataQuery['selectData'])
            ->whereIn($dataQuery['whereData'], $dataQuery['DataArr'])
            ->orderBy($dataQuery['orderBy']['keyOrderBy'], $dataQuery['orderBy']['sortBy'])
            ->get()->getResultArray();
    }
    public function groupByData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'log_login_admin',
        //     'selectData' => [
        //         'menu_id',
        //         'name_menu'
        //     ],
        //     'whereData' => [
        //         'id' => 1
        //     ],
        //     'groupBy' => [
        //         'keyGroupBy' => 'topic_menu'
        //     ],
        //     'orderBy' => [
        //         'keyOrderBy' => 'menu_id',
        //         'sortBy' => 'DESC',
        //     ],
        // );
        return $this->DB->table($dataQuery['tableDB'])
            ->select($dataQuery['selectData'])
            ->where($dataQuery['whereData'])
            ->groupBy($dataQuery['groupBy']['keyGroupBy'])
            ->orderBy($dataQuery['orderBy']['keyOrderBy'], $dataQuery['orderBy']['sortBy'])
            ->get()->getResultArray();
    }
    public function insertData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'log_login_admin',
        //     'data' => []
        // );
        return ($this->DB->table($dataQuery['tableDB'])->insert($dataQuery['data'])) ? $this->DB->insertID() : FALSE;
    }
    public function insertBatchData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'log_login_admin',
        //     'data' => [
        // [1,2]
        // ]
        // );
        return ($this->DB->table($dataQuery['tableDB'])->insertBatch($dataQuery['data'])) ? $this->DB->insertID() : FALSE;
    }
    public function deleteData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'log_login_admin',
        //     'data' => [
        //         'id' => 3
        //     ],
        // );
        return ($this->DB->table($dataQuery['tableDB'])->delete($dataQuery['data'])) ? TRUE : FALSE;
    }
    public function updateData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'log_login_admin',
        //     'whereData' => [
        //         'id' => 3
        //     ],
        //     'data' => [
        //         'name' => 'ddd'
        //     ]
        // );
        return ($this->DB->table($dataQuery['tableDB'])->where($dataQuery['whereData'])->set($dataQuery['data'])->update()) ? TRUE : FALSE;
    }

    public function joinAndWhereData($dataQuery)
    {
        // $dataQuery = array(
        //     'tableDB' => 'tb_thai_cf',
        //     'selectData' => [
        //         'tb_thai_cf.*', 'tb_users.*'
        //     ],
        //     'whereData' => [
        //         'tb_users.user_parent' => $this->user_id,
        //     ],
        //     'join' => [
        //         [
        //             'tableJoin' => 'tb_users',
        //             'keyJoin' => 'user_id',
        //             'keyHead' => 'user_id',
        //             'typeJoin' => 'left'
        //         ],
        //         [
        //             'tableJoin' => 'tb_tag',
        //             'keyJoin' => 'tag_id',
        //             'keyHead' => 'tag_id',
        //             'typeJoin' => 'left'
        //         ],
        //     ],
        //     'limit' => [
        //         'limitCount' => 50,
        //         'startAt' => 0
        //     ]
        // );
        $query = $this->DB->table($dataQuery['tableDB'])->select($dataQuery['selectData']);
        for ($i = 0; $i < count($dataQuery['join']); $i++) {
            $query = $query->join($dataQuery['join'][$i]['tableJoin'], $dataQuery['join'][$i]['tableJoin'] . '.' . $dataQuery['join'][$i]['keyJoin'] . '=' . $dataQuery['tableDB'] . '.' . $dataQuery['join'][$i]['keyHead'], $dataQuery['join'][$i]['typeJoin']);
        }
        $query = $query->where($dataQuery['whereData'])->limit($dataQuery['limit']['limitCount'], $dataQuery['limit']['startAt'])->get()->getResultArray();

        return $query;
    }

    public function checkHaveData($dataCheck)
    {
        return ($this->DB->table($dataCheck['tableDB'])->where($dataCheck['whereData'])->get()->resultID->num_rows == 1) ? TRUE : FALSE;
    }

    public function countData($dataCheck)
    {
        return $this->DB->table($dataCheck['tableDB'])->where($dataCheck['whereData'])->countAllResults();
    }
}
