<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class BaseService
 {
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Application
     */
    // protected $app;

    /**
     * @param Application $app
     *
     * @throws \Exception
     */
    public function __construct(Model $model,)
    {
        // $this->app = $app;
        $this->model = $model;

        // $this->makeModel();
    }

    /**
     * Get searchable fields array
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
    }

    public function fail($msg, $logMsg = 'App Error', $log = null, $code = 404)
    {
        $feedback = [];
        $feedback['status'] = false;
        $feedback['msg'] = $msg;
        $feedback['code'] = $code;
        if ($log != null) {
            Log::debug($logMsg . ' : ' . $log->getMessage());
        }
        return $feedback;
    }
    public function success($msg, $data, $code = 200)
    {
        $feedback = [];
        $feedback['status'] = true;
        $feedback['msg'] = $msg;
        $feedback['data'] = $data;
        $feedback['code'] = $code;
        return $feedback;
    }

    public function paginate($perPage, $columns = ['*'])
    {
        $query = $this->allQuery();

        $result = $query->paginate($perPage, $columns);

        return $this->success('Result', $result);
    }

    /**
     * Build a query for retrieving all records or search with like operator.
     *
     * @param string|array $search
     * @param int|null $skip
     * @param int|null $limit
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function allQuery($search = [], $date = null, $skip = null, $limit = null)
    {
        $query = $this->model->newQuery();

        if (is_array($search)) {
            if (count($search)) {
                foreach ($search as $key => $value) {
                    if (in_array($key, $this->getFieldsSearchable())) {
                        $query->where($key, $value);
                    }
                }
            }
        } else {
            if (!empty($search)) {
                $query->where(function ($query) use ($search) {
                    foreach ($this->getFieldsSearchable() as $field) {
                        $query = $query->orWhere($field, 'LIKE', "%$search%");
                    }
                });
            }
        }

        if (!is_null($skip)) {
            $query->skip($skip);
        }

        if (!is_null($limit)) {
            $query->limit($limit);
        }

        return $query;
    }

    /**
     * Retrieve all records with given filter criteria
     *
     * @param string|array $search
     * @param int|null $skip
     * @param int|null $limit
     * @param array $columns
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all($search = [], $skip = null, $limit = null, $columns = ['*'])
    {
        $query = $this->allQuery($search, $skip, $limit);

        $result = $query->get($columns);
        return $this->success('Result', $result);
    }

    /**
     * Create model record
     *
     * @param array $input
     *
     * @return Model
     */
    public function create($input)
    {
        // $model = $this->model->newInstance($input);
        $model = $this->model->create($input);

        // $model->save();

        if ($model) {
            return $this->success("created", $model);
        }
        return $this->fail("Error creating item");
    }

    /**
     * Find model record for given id
     *
     * @param int $id
     * @param array $columns
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model|null
     */
    public function find($id, $columns = ['*'])
    {
        $query = $this->model->newQuery();


        $result =  $query->find($id, $columns);
        return $this->success('success', $result);
    }
    public function findBySlug($slug)
    {
        $query = $this->model->newQuery();


        $result =  $query->where('slug', $slug)->first();
        return $this->success('success', $result);
    }

    /**
     * Update model record for given id
     *
     * @param array $input
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function update($input, $id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $model->fill($input);

        if ($model->save()) {
            return $this->success("updated", $model);
        }
        return $this->fail("Error updatin item");

        // return $model;
    }

    /**
     * @param int $id
     *
     * @return bool|mixed|null
     * @throws \Exception
     *
     */
    public function delete($id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);
        if ($model->delete()) {
            return $this->success("Deleted", true);
        }
        return $this->fail("Error deleting item");

        // return $model->delete();
    }


    protected function queryByDate($query, $startDate, $endDate, $dateColumn)
    {
        $start = Carbon::parse($startDate)->format("Y-m-d");
        $end = Carbon::parse($endDate)->format("Y-m-d");

        if ($start != "" && $end != "") {
            $query->whereDate($dateColumn, '>=', $start)->whereDate($dateColumn, '<=', $end);
        }
        return $query;
    }
    protected function queryBySearch($query, $search)
    {
        if ($search != "") {
            $query->where(function ($query) use ($search) {
                foreach ($this->getFieldsSearchable() as $field) {
                    $query = $query->orWhere($field, 'LIKE', "%$search%");
                }
            });
        }
        return $query;
    }
 }
