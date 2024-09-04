<?php

interface State {
    public function doAction(Context $context);
    public function toString();
}