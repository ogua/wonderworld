<?php
/**
 * Shared DB connection + admin-portal linkage for the WWIS website.
 *
 * $uniqueid is the school's tenant identifier in the oguaschoolz database
 * (schools.uniqueid). As of this build there is no "Wonder World
 * International School" row in that database yet, so "admin" is a stand-in
 * tenant used for development, per an explicit decision to build against it
 * now and swap in the real WWIS tenant at deploy time rather than block on
 * it. Update $uniqueid (and $schoolurl below) once that row exists.
 *
 * mysqli's 5th constructor argument is the port, not the password. The
 * local MySQL instance backing oguaschoolz listens on 3310, not the default
 * 3306, so it must be passed positionally after an empty password.
 */
$conn = new mysqli('127.0.0.1', 'root', '', 'oguaschoolz', 3310);

// Base URL of the admin portal (oguaschoolv2) that hosts the payment-capable
// online admission and tour-booking forms. Points at local dev for now;
// swap to the production admin subdomain before launch.
$schoolurl = "http://oguasms.com:7000";

$uniqueid = "admin";