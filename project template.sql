-- Create a database to use if one does not already exist
CREATE DATABASE IF NOT EXISTS HealthCare;

-- Tell the program which database to use to ensure to correct one is being worked on
USE HealthCare;

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Patient (
	PatientID int PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(50) not null,
    LastName varchar(50) not null,
    Address varchar(255),
    ssn char(9),
    PhoneNumber char(10),
	insurance bool,
    PharmacyID int,
    Admitted datetime,
    Released datetime
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Pharmacy (
	PharmacyID int PRIMARY KEY AUTO_INCREMENT,
	PharmacyName varchar(50) NOT NULL,
	PharmacyAddress varchar(50),
	PharmacyPhoneNumber char(10)
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Hospital (
	HospitalID int PRIMARY KEY AUTO_INCREMENT,
    HospitalName varchar(50) NOT NULL,
    HospitalAddress varchar(50),
    HospitalPhoneNumber char(10),
    State varchar(2),
    ZipCode varchar(5)
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Department (
	DepartmentID int PRIMARY KEY AUTO_INCREMENT,
    HospitalID int NOT NULL,
    DepartmentName varchar(50) NOT NULL
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Staff (
	StaffID int PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(50) NOT NULL,
    LastName varchar(50) NOT NULL,
    ssn char(9),
    Address varchar(255),
    DepartmentID int NOT NULL,
    PhoneNumber char(10)
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Room (
	RoomID int PRIMARY KEY AUTO_INCREMENT,
    PatientID int,
    StaffID int,
    AdmissionDate date
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Prescription (
	PrescriptionID int PRIMARY KEY AUTO_INCREMENT,
    MedicationName varchar(100) NOT NULL,
    PrescriptionDate datetime,
    PatientID int NOT NULL,
    PrescriptionCost decimal NOT NULL
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Doctor (
	DoctorID int PRIMARY KEY AUTO_INCREMENT,
    FirstName varchar(50) NOT NULL,
    LastName varchar(50) NOT NULL,
    ssn char(9),
    DepartmentID int NOT NULL,
    PhoneNumber char(10)
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Appointment (
	AppointmentID int PRIMARY KEY AUTO_INCREMENT,
    PatientID int NOT NULL,
    DoctorID int NOT NULL, 
    Date date NOT NULL,
    Time time NOT NULL
);

-- Create the table if it does not alread exist
CREATE TABLE IF NOT EXISTS Invoice (
	InvoiceID int PRIMARY KEY AUTO_INCREMENT,
    PatientID int NOT NULL,
    ServiceDescription varchar(255) NOT NULL,
    Cost decimal NOT NULL,
    Total decimal NOT NULL
);

-- Add the Foreign key contraints to each of the foreign key references
ALTER TABLE Patient ADD CONSTRAINT FOREIGN KEY (PharmacyID)  REFERENCES Pharmacy(PharmacyID);
ALTER TABLE Department ADD CONSTRAINT FOREIGN KEY (HospitalID)  REFERENCES Hospital(HospitalID);
ALTER TABLE Staff ADD CONSTRAINT FOREIGN KEY (DepartmentID)  REFERENCES Department(DepartmentID);
ALTER TABLE Room ADD CONSTRAINT FOREIGN KEY (PatientID)  REFERENCES Patient(PatientID);
ALTER TABLE Room ADD CONSTRAINT FOREIGN KEY (StaffID)  REFERENCES Staff(StaffID);
ALTER TABLE Prescription ADD CONSTRAINT FOREIGN KEY (PatientID) REFERENCES Patient(PatientID);
ALTER TABLE Doctor ADD CONSTRAINT FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID);
ALTER TABLE Appointment ADD CONSTRAINT FOREIGN KEY (PatientID) REFERENCES Patient(PatientID);
ALTER TABLE Appointment ADD CONSTRAINT FOREIGN KEY (DoctorID) REFERENCES Doctor(DoctorID);
ALTER TABLE Invoice ADD CONSTRAINT FOREIGN KEY (PatientID) REFERENCES Patient(PatientID);

