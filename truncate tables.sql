-- Truncate data from tables
SET FOREIGN_KEY_CHECKS = 0; -- drops foreign key constraints

TRUNCATE TABLE Appointment;
TRUNCATE TABLE Department;
TRUNCATE TABLE Doctor;
TRUNCATE TABLE Hospital;
TRUNCATE TABLE Invoice;
TRUNCATE TABLE Patient;
TRUNCATE TABLE Pharmacy;
TRUNCATE TABLE Prescription;
TRUNCATE TABLE Room;
TRUNCATE TABLE Staff;

SET FOREIGN_KEY_CHECKS = 1; -- readds foreign key constraints