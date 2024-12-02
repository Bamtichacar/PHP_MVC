<?php
interface RepositoryInterface {
    public function getAll();
    public function getAllby($filter);
}