<?php
/**
 * Created by PhpStorm.
 * User: FFX Sistemas
 * Date: 02/06/2018
 * Time: 15:36
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Repository
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->getModel()->find($id);
        return ($result instanceof Collection) ? $result->first() : $result;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        return $this->getModel()->all();
    }

    /**
     * @param array $options
     * @return mixed
     */
    public function create(array $options)
    {
        return $this->getModel()->create($options);
    }

    /**
     * @param array $options
     * @param $id
     * @return mixed
     */
    public function update(array $options, $id)
    {
        return $this->find($id)->update($options);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function firstOrCreate(array $data)
    {
        return $this->getModel()->firstOrCreate($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->find($id)->delete();
    }

    /**
     * @param $select
     * @param array $criteria
     * @param null $orderBy
     * @param null $limit
     * @param null $offset
     * @param null $paginate
     * @return mixed
     */
    public function findBy($select, array $criteria = [], $orderBy = null, $limit = null, $offset = null, $paginate = null)
    {
        $allowedMethods = [
            'where',
            'orWhere',
            'whereBetween',
            'notWhere'
        ];
        $_select = ((is_array($select))) ? $select : [$select];
        $query = $this->getModel()
            ->select(... $_select);
        foreach ($criteria as $criterion) {
            if(key_exists($criterion['type'], $allowedMethods)) {
                $query = $query->$criterion['type'](... $criterion['args']);
            }
        }
        if($orderBy != null) {
            $orderBy = (is_array($orderBy)) ? $orderBy : [$orderBy];
            $query = $query->orderBy(... $orderBy);
        }
        if($limit != null) {
            $query = $query->limit($limit);
        }
        if($offset != null) {
            $query = $query->offset($offset);
        }
        if($paginate != null) {
            return $query->paginate($paginate);
        }
        return $query->get();
    }

    /**
     * @param $amount
     * @return mixed
     */
    public function paginate($amount)
    {
        return $this->getModel()->paginate($amount);
    }


    /**
     * @return Model
     */
    public abstract function getModel();
}