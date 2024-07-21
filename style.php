<?php
header("Content-Type: text/css; charset: UTF-8");

?>
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #F9A392;
  --secondary: #6EBBF6;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #FEF1EF;
  --dark: #211E1C;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: "Poppins", sans-serif;
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

footer,
header,
hgroup,
main,
nav,
section {
  display: block;
}

body {
  margin: 0;
  font-family: "Poppins", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #757575;
  text-align: left;
  background-color: #fdf9f9;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

a {
  color: #F9A392;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #FF8911;
  text-decoration: underline;
  font-size: 18px;
}

textarea {
  overflow: auto;
  resize: vertical;

  background-color: red;
}

@media (max-width: 1200px) {
  legend {
    font-size: calc(1.275rem + 0.3vw);
  }
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
  color: #211E1C;
}

h1,
.h1 {
  font-size: 2.5rem;
}

@media (max-width: 1200px) {

  h1,
  .h1 {
    font-size: calc(1.375rem + 1.5vw);
  }
}

h2,
.h2 {
  font-size: 2rem;
}

@media (max-width: 1200px) {

  h2,
  .h2 {
    font-size: calc(1.325rem + 0.9vw);
  }
}

h3,
.h3 {
  font-size: 1.75rem;
}

@media (max-width: 1200px) {

  h3,
  .h3 {
    font-size: calc(1.3rem + 0.6vw);
  }
}

h4,
.h4 {
  font-size: 1.5rem;
}

@media (max-width: 1200px) {

  h4,
  .h4 {
    font-size: calc(1.275rem + 0.3vw);
  }
}

h5,
.h5 {
  font-size: 1.25rem;
}

h6,
.h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

@media (max-width: 1200px) {
  .display-1 {
    font-size: calc(1.725rem + 5.7vw);
  }
}

@media (max-width: 1200px) {
  .display-2 {
    font-size: calc(1.675rem + 5.1vw);
  }
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

@media (max-width: 1200px) {
  .display-3 {
    font-size: calc(1.575rem + 3.9vw);
  }
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {

  .container,
  .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {

  .container,
  .container-sm,
  .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {

  .container,
  .container-sm,
  .container-md,
  .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {

  .container,
  .container-sm,
  .container-md,
  .container-lg,
  .container-xl {
    max-width: 1140px;
  }
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

.row-cols-1>* {
  flex: 0 0 100%;
  max-width: 100%;
}

.row-cols-2>* {
  flex: 0 0 50%;
  max-width: 50%;
}

.row-cols-3>* {
  flex: 0 0 33.33333%;
  max-width: 33.33333%;
}

.row-cols-4>* {
  flex: 0 0 25%;
  max-width: 25%;
}

.row-cols-5>* {
  flex: 0 0 20%;
  max-width: 20%;
}

.row-cols-6>* {
  flex: 0 0 16.66667%;
  max-width: 16.66667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%;
}

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%;
}

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%;
}

.col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%;
}

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%;
}

.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%;
}

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%;
}

.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .row-cols-sm-1>* {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .row-cols-sm-2>* {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .row-cols-sm-3>* {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .row-cols-sm-4>* {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .row-cols-sm-5>* {
    flex: 0 0 20%;
    max-width: 20%;
  }

  .row-cols-sm-6>* {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }

  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
    border: 15px solid red;
  }

  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .row-cols-md-1>* {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .row-cols-md-2>* {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .row-cols-md-3>* {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .row-cols-md-4>* {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .row-cols-md-5>* {
    flex: 0 0 20%;
    max-width: 20%;
  }

  .row-cols-md-6>* {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }

  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-md-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .row-cols-lg-1>* {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .row-cols-lg-2>* {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .row-cols-lg-3>* {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .row-cols-lg-4>* {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .row-cols-lg-5>* {
    flex: 0 0 20%;
    max-width: 20%;
  }

  .row-cols-lg-6>* {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }

  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .row-cols-xl-1>* {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .row-cols-xl-2>* {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .row-cols-xl-3>* {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .row-cols-xl-4>* {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .row-cols-xl-5>* {
    flex: 0 0 20%;
    max-width: 20%;
  }

  .row-cols-xl-6>* {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }

  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }

  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }

  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }

  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }

  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }

  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }

  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }

  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }

  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: black;
  background-color: #fff;
  background-clip: padding-box;
  border: 2px solid black;
  border-radius: 0;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: red;
  border: 20px;
}

.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: white;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(249, 163, 146, 0.25);
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled,
.form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
  background-color: red;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #757575;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

select.form-control[size],
select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row>.col,
.form-row>[class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input[disabled]~.form-check-label,
.form-check-input:disabled~.form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #757575;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #757575;
  text-decoration: none;
}

.btn-primary {
  color: black;
  background-color: #FF004D;
  border-color: #FF8911;
}

.btn-primary:hover {
  color: #212529;
  background-color: #FF8911;
  border-color: black;
}

.btn-primary.disabled,
.btn-primary:disabled {
  color: #212529;
  background-color: #F9A392;
  border-color: #F9A392;
}

.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show>.btn-primary.dropdown-toggle {
  color: #212529;
  background-color: #f67a62;
  border-color: #f67056;
}

.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.show>.btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(217, 144, 130, 0.5);
}

.btn-outline-light {
  color: #FEF1EF;
  border-color: #FEF1EF;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #FEF1EF;
  border-color: #FEF1EF;
}

.btn-outline-light:focus,
.btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 241, 239, 0.5);
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
  color: #FEF1EF;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show>.btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #FEF1EF;
  border-color: #FEF1EF;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 241, 239, 0.5);
}

.btn-lg,
.btn-group-lg>.btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0;
}

.btn-sm,
.btn-group-sm>.btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
  color: red;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #757575;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover,
.dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active,
.dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #F9A392;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #ecf0f4;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
  font-size: 20px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  margin-bottom: 20px;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
  font-size: 20px;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
}

.navbar-toggler:hover,
.navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {

  .navbar-expand-sm>.container,
  .navbar-expand-sm>.container-fluid,
  .navbar-expand-sm>.container-sm,
  .navbar-expand-sm>.container-md,
  .navbar-expand-sm>.container-lg,
  .navbar-expand-sm>.container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-sm>.container,
  .navbar-expand-sm>.container-fluid,
  .navbar-expand-sm>.container-sm,
  .navbar-expand-sm>.container-md,
  .navbar-expand-sm>.container-lg,
  .navbar-expand-sm>.container-xl {
    flex-wrap: nowrap;
  }

  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {

  .navbar-expand-md>.container,
  .navbar-expand-md>.container-fluid,
  .navbar-expand-md>.container-sm,
  .navbar-expand-md>.container-md,
  .navbar-expand-md>.container-lg,
  .navbar-expand-md>.container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-md>.container,
  .navbar-expand-md>.container-fluid,
  .navbar-expand-md>.container-sm,
  .navbar-expand-md>.container-md,
  .navbar-expand-md>.container-lg,
  .navbar-expand-md>.container-xl {
    flex-wrap: nowrap;
  }

  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {

  .navbar-expand-lg>.container,
  .navbar-expand-lg>.container-fluid,
  .navbar-expand-lg>.container-sm,
  .navbar-expand-lg>.container-md,
  .navbar-expand-lg>.container-lg,
  .navbar-expand-lg>.container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-lg>.container,
  .navbar-expand-lg>.container-fluid,
  .navbar-expand-lg>.container-sm,
  .navbar-expand-lg>.container-md,
  .navbar-expand-lg>.container-lg,
  .navbar-expand-lg>.container-xl {
    flex-wrap: nowrap;
  }

  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {

  .navbar-expand-xl>.container,
  .navbar-expand-xl>.container-fluid,
  .navbar-expand-xl>.container-sm,
  .navbar-expand-xl>.container-md,
  .navbar-expand-xl>.container-lg,
  .navbar-expand-xl>.container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-xl>.container,
  .navbar-expand-xl>.container-fluid,
  .navbar-expand-xl>.container-sm,
  .navbar-expand-xl>.container-md,
  .navbar-expand-xl>.container-lg,
  .navbar-expand-xl>.container-xl {
    flex-wrap: nowrap;
  }

  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid,
.navbar-expand>.container-sm,
.navbar-expand>.container-md,
.navbar-expand>.container-lg,
.navbar-expand>.container-xl {
  flex-wrap: nowrap;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid,
.navbar-expand>.container-sm,
.navbar-expand>.container-md,
.navbar-expand>.container-lg,
.navbar-expand>.container-xl {
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}


.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}


.jumbotron {
  padding: 6rem 2rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 10%;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {

  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {

  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 0px;
  height: 20px;
  background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}


.bg-secondary {
  background-color: #6EBBF6 !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #3ea4f3 !important;
}

.bg-success {
  background-color: #28a745 !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #17a2b8 !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #ffc107 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #FEF1EF !important;
}

a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #fbc7bf !important;
}

.bg-dark {
  background-color: #211E1C !important;
}

a.bg-dark:hover,
a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #050505 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: black !important;
  font-size: 20px;
  text-justify: auto;
}

.border-secondary {
  border-color: #6EBBF6 !important;
}

.border-success {
  border-color: #28a745 !important;
}

.border-info {
  border-color: #17a2b8 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #FEF1EF !important;
}

.border-dark {
  border-color: #211E1C !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}


.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }

  .d-sm-inline {
    display: inline !important;
  }

  .d-sm-inline-block {
    display: inline-block !important;
  }

  .d-sm-block {
    display: block !important;
  }

  .d-sm-flex {
    display: flex !important;
  }

  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }

  .d-md-inline {
    display: inline !important;
  }

  .d-md-inline-block {
    display: inline-block !important;
  }

  .d-md-block {
    display: block !important;
  }

  .d-md-flex {
    display: flex !important;
  }

  .d-md-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }

  .d-lg-inline {
    display: inline !important;
  }

  .d-lg-inline-block {
    display: inline-block !important;
  }

  .d-lg-block {
    display: block !important;
  }

  .d-lg-table {
    display: table !important;
  }

  .d-lg-table-row {
    display: table-row !important;
  }

  .d-lg-table-cell {
    display: table-cell !important;
  }

  .d-lg-flex {
    display: flex !important;
  }

  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }

  .d-xl-inline {
    display: inline !important;
  }

  .d-xl-inline-block {
    display: inline-block !important;
  }

  .d-xl-block {
    display: block !important;
  }

  .d-xl-flex {
    display: flex !important;
  }

  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }

  .flex-sm-column {
    flex-direction: column !important;
  }

  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }

  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .flex-sm-fill {
    flex: 1 1 auto !important;
  }

  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }

  .justify-content-sm-start {
    justify-content: flex-start !important;
  }

  .justify-content-sm-end {
    justify-content: flex-end !important;
  }

  .justify-content-sm-center {
    justify-content: center !important;
  }

  .justify-content-sm-between {
    justify-content: space-between !important;
  }

  .justify-content-sm-around {
    justify-content: space-around !important;
  }

  .align-items-sm-start {
    align-items: flex-start !important;
  }

  .align-items-sm-end {
    align-items: flex-end !important;
  }

  .align-items-sm-center {
    align-items: center !important;
  }

  .align-items-sm-baseline {
    align-items: baseline !important;
  }

  .align-items-sm-stretch {
    align-items: stretch !important;
  }

  .align-content-sm-start {
    align-content: flex-start !important;
  }

  .align-content-sm-end {
    align-content: flex-end !important;
  }

  .align-content-sm-center {
    align-content: center !important;
  }

  .align-content-sm-between {
    align-content: space-between !important;
  }

  .align-content-sm-around {
    align-content: space-around !important;
  }

  .align-content-sm-stretch {
    align-content: stretch !important;
  }

  .align-self-sm-auto {
    align-self: auto !important;
  }

  .align-self-sm-start {
    align-self: flex-start !important;
  }

  .align-self-sm-end {
    align-self: flex-end !important;
  }

  .align-self-sm-center {
    align-self: center !important;
  }

  .align-self-sm-baseline {
    align-self: baseline !important;
  }

  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }

  .flex-md-column {
    flex-direction: column !important;
  }

  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-md-wrap {
    flex-wrap: wrap !important;
  }

  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .flex-md-fill {
    flex: 1 1 auto !important;
  }

  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }

  .justify-content-md-start {
    justify-content: flex-start !important;
  }

  .justify-content-md-end {
    justify-content: flex-end !important;
  }

  .justify-content-md-center {
    justify-content: center !important;
  }

  .justify-content-md-between {
    justify-content: space-between !important;
  }

  .justify-content-md-around {
    justify-content: space-around !important;
  }

  .align-items-md-start {
    align-items: flex-start !important;
  }

  .align-items-md-end {
    align-items: flex-end !important;
  }

  .align-items-md-center {
    align-items: center !important;
  }

  .align-items-md-baseline {
    align-items: baseline !important;
  }

  .align-items-md-stretch {
    align-items: stretch !important;
  }

  .align-content-md-start {
    align-content: flex-start !important;
  }

  .align-content-md-end {
    align-content: flex-end !important;
  }

  .align-content-md-center {
    align-content: center !important;
  }

  .align-content-md-between {
    align-content: space-between !important;
  }

  .align-content-md-around {
    align-content: space-around !important;
  }

  .align-content-md-stretch {
    align-content: stretch !important;
  }

  .align-self-md-auto {
    align-self: auto !important;
  }

  .align-self-md-start {
    align-self: flex-start !important;
  }

  .align-self-md-end {
    align-self: flex-end !important;
  }

  .align-self-md-center {
    align-self: center !important;
  }

  .align-self-md-baseline {
    align-self: baseline !important;
  }

  .align-self-md-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }

  .flex-lg-column {
    flex-direction: column !important;
  }

  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }

  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .flex-lg-fill {
    flex: 1 1 auto !important;
  }

  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }

  .justify-content-lg-start {
    justify-content: flex-start !important;
  }

  .justify-content-lg-end {
    justify-content: flex-end !important;
  }

  .justify-content-lg-center {
    justify-content: center !important;
  }

  .justify-content-lg-between {
    justify-content: space-between !important;
  }

  .justify-content-lg-around {
    justify-content: space-around !important;
  }

  .align-items-lg-start {
    align-items: flex-start !important;
  }

  .align-items-lg-end {
    align-items: flex-end !important;
  }

  .align-items-lg-center {
    align-items: center !important;
  }

  .align-items-lg-baseline {
    align-items: baseline !important;
  }

  .align-items-lg-stretch {
    align-items: stretch !important;
  }

  .align-content-lg-start {
    align-content: flex-start !important;
  }

  .align-content-lg-end {
    align-content: flex-end !important;
  }

  .align-content-lg-center {
    align-content: center !important;
  }

  .align-content-lg-between {
    align-content: space-between !important;
  }

  .align-content-lg-around {
    align-content: space-around !important;
  }

  .align-content-lg-stretch {
    align-content: stretch !important;
  }

  .align-self-lg-auto {
    align-self: auto !important;
  }

  .align-self-lg-start {
    align-self: flex-start !important;
  }

  .align-self-lg-end {
    align-self: flex-end !important;
  }

  .align-self-lg-center {
    align-self: center !important;
  }

  .align-self-lg-baseline {
    align-self: baseline !important;
  }

  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }

  .flex-xl-column {
    flex-direction: column !important;
  }

  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }

  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .flex-xl-fill {
    flex: 1 1 auto !important;
  }

  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }

  .justify-content-xl-start {
    justify-content: flex-start !important;
  }

  .justify-content-xl-end {
    justify-content: flex-end !important;
  }

  .justify-content-xl-center {
    justify-content: center !important;
  }

  .justify-content-xl-between {
    justify-content: space-between !important;
  }

  .justify-content-xl-around {
    justify-content: space-around !important;
  }

  .align-items-xl-start {
    align-items: flex-start !important;
  }

  .align-items-xl-end {
    align-items: flex-end !important;
  }

  .align-items-xl-center {
    align-items: center !important;
  }

  .align-items-xl-baseline {
    align-items: baseline !important;
  }

  .align-items-xl-stretch {
    align-items: stretch !important;
  }

  .align-content-xl-start {
    align-content: flex-start !important;
  }

  .align-content-xl-end {
    align-content: flex-end !important;
  }

  .align-content-xl-center {
    align-content: center !important;
  }

  .align-content-xl-between {
    align-content: space-between !important;
  }

  .align-content-xl-around {
    align-content: space-around !important;
  }

  .align-content-xl-stretch {
    align-content: stretch !important;
  }

  .align-self-xl-auto {
    align-self: auto !important;
  }

  .align-self-xl-start {
    align-self: flex-start !important;
  }

  .align-self-xl-end {
    align-self: flex-end !important;
  }

  .align-self-xl-center {
    align-self: center !important;
  }

  .align-self-xl-baseline {
    align-self: baseline !important;
  }

  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }

  .float-sm-right {
    float: right !important;
  }

  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }

  .float-md-right {
    float: right !important;
  }

  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }

  .float-lg-right {
    float: right !important;
  }

  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }

  .float-xl-right {
    float: right !important;
  }

  .float-xl-none {
    float: none !important;
  }
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }

  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }

  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }

  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }

  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }

  .m-sm-1 {
    margin: 0.25rem !important;
  }

  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }

  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }

  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }

  .m-sm-2 {
    margin: 0.5rem !important;
  }

  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }

  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }

  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }

  .m-sm-3 {
    margin: 1rem !important;
  }

  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }

  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }

  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }

  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }

  .m-sm-4 {
    margin: 1.5rem !important;
  }

  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }

  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }

  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }

  .m-sm-5 {
    margin: 3rem !important;
  }

  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }

  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }

  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }

  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }

  .p-sm-0 {
    padding: 0 !important;
  }

  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }

  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }

  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }

  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }

  .p-sm-1 {
    padding: 0.25rem !important;
  }

  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }

  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }

  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }

  .p-sm-2 {
    padding: 0.5rem !important;
  }

  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }

  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }

  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }

  .p-sm-3 {
    padding: 1rem !important;
  }

  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }

  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }

  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }

  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }

  .p-sm-4 {
    padding: 1.5rem !important;
  }

  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }

  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }

  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }

  .p-sm-5 {
    padding: 3rem !important;
  }

  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }

  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }

  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }

  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }

  .m-sm-n1 {
    margin: -0.25rem !important;
  }

  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important;
  }

  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }

  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }

  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }

  .m-sm-n2 {
    margin: -0.5rem !important;
  }

  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important;
  }

  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }

  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }

  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }

  .m-sm-n3 {
    margin: -1rem !important;
  }

  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important;
  }

  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important;
  }

  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important;
  }

  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important;
  }

  .m-sm-n4 {
    margin: -1.5rem !important;
  }

  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important;
  }

  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }

  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }

  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }

  .m-sm-n5 {
    margin: -3rem !important;
  }

  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important;
  }

  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important;
  }

  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important;
  }

  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important;
  }

  .m-sm-auto {
    margin: auto !important;
  }

  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }

  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }

  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }

  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }

  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }

  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }

  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }

  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }

  .m-md-1 {
    margin: 0.25rem !important;
  }

  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }

  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }

  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }

  .m-md-2 {
    margin: 0.5rem !important;
  }

  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }

  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }

  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }

  .m-md-3 {
    margin: 1rem !important;
  }

  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }

  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }

  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }

  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }

  .m-md-4 {
    margin: 1.5rem !important;
  }

  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }

  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }

  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }

  .m-md-5 {
    margin: 3rem !important;
  }

  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }

  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }

  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }

  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }

  .p-md-0 {
    padding: 0 !important;
  }

  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }

  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }

  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }

  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }

  .p-md-1 {
    padding: 0.25rem !important;
  }

  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }

  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }

  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }

  .p-md-2 {
    padding: 0.5rem !important;
  }

  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }

  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }

  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }

  .p-md-3 {
    padding: 1rem !important;
  }

  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }

  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }

  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }

  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }

  .p-md-4 {
    padding: 1.5rem !important;
  }

  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }

  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }

  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }

  .p-md-5 {
    padding: 3rem !important;
  }

  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }

  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }

  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }

  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }

  .m-md-n1 {
    margin: -0.25rem !important;
  }

  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important;
  }

  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important;
  }

  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }

  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important;
  }

  .m-md-n2 {
    margin: -0.5rem !important;
  }

  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important;
  }

  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important;
  }

  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }

  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important;
  }

  .m-md-n3 {
    margin: -1rem !important;
  }

  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important;
  }

  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important;
  }

  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important;
  }

  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important;
  }

  .m-md-n4 {
    margin: -1.5rem !important;
  }

  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important;
  }

  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important;
  }

  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }

  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important;
  }

  .m-md-n5 {
    margin: -3rem !important;
  }

  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important;
  }

  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important;
  }

  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important;
  }

  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important;
  }

  .m-md-auto {
    margin: auto !important;
  }

  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }

  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }

  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }

  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }

  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }

  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }

  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }

  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }

  .m-lg-1 {
    margin: 0.25rem !important;
  }

  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }

  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }

  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }

  .m-lg-2 {
    margin: 0.5rem !important;
  }

  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }

  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }

  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }

  .m-lg-3 {
    margin: 1rem !important;
  }

  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }

  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }

  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }

  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }

  .m-lg-4 {
    margin: 1.5rem !important;
  }

  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }

  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }

  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }

  .m-lg-5 {
    margin: 3rem !important;
  }

  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }

  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }

  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }

  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }

  .p-lg-0 {
    padding: 0 !important;
  }

  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }

  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }

  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }

  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }

  .p-lg-1 {
    padding: 0.25rem !important;
  }

  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }

  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }

  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }

  .p-lg-2 {
    padding: 0.5rem !important;
  }

  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }

  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }

  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }

  .p-lg-3 {
    padding: 1rem !important;
  }

  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }

  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }

  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }

  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }

  .p-lg-4 {
    padding: 1.5rem !important;
  }

  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }

  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }

  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }

  .p-lg-5 {
    padding: 3rem !important;
  }

  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }

  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }

  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }

  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }

  .m-lg-n1 {
    margin: -0.25rem !important;
  }

  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important;
  }

  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }

  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }

  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }

  .m-lg-n2 {
    margin: -0.5rem !important;
  }

  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important;
  }

  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }

  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }

  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }

  .m-lg-n3 {
    margin: -1rem !important;
  }

  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important;
  }

  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important;
  }

  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important;
  }

  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important;
  }

  .m-lg-n4 {
    margin: -1.5rem !important;
  }

  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important;
  }

  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }

  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }

  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }

  .m-lg-n5 {
    margin: -3rem !important;
  }

  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important;
  }

  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important;
  }

  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important;
  }

  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important;
  }

  .m-lg-auto {
    margin: auto !important;
  }

  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }

  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }

  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }

  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }

  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }

  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }

  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }

  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }

  .m-xl-1 {
    margin: 0.25rem !important;
  }

  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }

  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }

  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }

  .m-xl-2 {
    margin: 0.5rem !important;
  }

  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }

  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }

  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }

  .m-xl-3 {
    margin: 1rem !important;
  }

  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }

  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }

  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }

  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }

  .m-xl-4 {
    margin: 1.5rem !important;
  }

  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }

  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }

  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }

  .m-xl-5 {
    margin: 3rem !important;
  }

  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }

  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }

  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }

  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }

  .p-xl-0 {
    padding: 0 !important;
  }

  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }

  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }

  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }

  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }

  .p-xl-1 {
    padding: 0.25rem !important;
  }

  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }

  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }

  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }

  .p-xl-2 {
    padding: 0.5rem !important;
  }

  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }

  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }

  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }

  .p-xl-3 {
    padding: 1rem !important;
  }

  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }

  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }

  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }

  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }

  .p-xl-4 {
    padding: 1.5rem !important;
  }

  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }

  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }

  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }

  .p-xl-5 {
    padding: 3rem !important;
  }

  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }

  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }

  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }

  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }

  .m-xl-n1 {
    margin: -0.25rem !important;
  }

  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important;
  }

  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }

  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }

  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }

  .m-xl-n2 {
    margin: -0.5rem !important;
  }

  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important;
  }

  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }

  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }

  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }

  .m-xl-n3 {
    margin: -1rem !important;
  }

  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important;
  }

  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important;
  }

  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important;
  }

  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important;
  }

  .m-xl-n4 {
    margin: -1.5rem !important;
  }

  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important;
  }

  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }

  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }

  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }

  .m-xl-n5 {
    margin: -3rem !important;
  }

  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important;
  }

  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important;
  }

  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important;
  }

  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important;
  }

  .m-xl-auto {
    margin: auto !important;
  }

  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }

  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }

  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }

  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }

  .text-sm-right {
    text-align: right !important;
  }

  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }

  .text-md-right {
    text-align: right !important;
  }

  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }

  .text-lg-right {
    text-align: right !important;
  }

  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }

  .text-xl-right {
    text-align: right !important;
  }

  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #F9A392 !important;

}

.text-secondary {
  color: #6EBBF6 !important;
}

a.text-secondary:hover,
a.text-secondary:focus {
  color: #2699f2 !important;
}

.text-success {
  color: #28a745 !important;
}

a.text-success:hover,
a.text-success:focus {
  color: #19692c !important;
}

.text-info {
  color: #17a2b8 !important;
}

a.text-info:hover,
a.text-info:focus {
  color: #0f6674 !important;
}

.text-warning {
  color: #ffc107 !important;
}

a.text-warning:hover,
a.text-warning:focus {
  color: #ba8b00 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover,
a.text-danger:focus {
  color: #a71d2a !important;
}

.text-light {
  color: #FEF1EF !important;
}

a.text-light:hover,
a.text-light:focus {
  color: #fab2a7 !important;
}

.text-dark {
  color: #211E1C !important;
}

.text-body {
  color: #757575 !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  word-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {

  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }

  a:not(.btn) {
    text-decoration: underline;
  }

  abbr[title]::after {
    content: " (" attr(title) ")";
  }

  pre {
    white-space: pre-wrap !important;
  }

  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

  @page {
    size: a3;
  }

  body {
    min-width: 992px !important;
  }

  .container {
    min-width: 992px !important;
  }

  .navbar {
    display: none;
  }

  .badge {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }

  .table td,
  .table th {
    background-color: #fff !important;
  }

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }

  .table-dark {
    color: inherit;
  }

  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody+tbody {
    border-color: #dee2e6;
  }

  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}

/********** Template CSS ************/
h1,
h2,
.font-weight-bold {
  font-weight: 700 !important;
}

h3,
h4,
.font-weight-semi-bold {
  font-weight: 600 !important;
}

h5,
h6,
.font-weight-medium {
  font-weight: 500 !important;
}

.btn {
  font-weight: 500;
}

.btn.btn-sm,
.btn-group-sm>.btn {
  font-weight: 400;
}

.btn.btn-primary,
.btn.btn-secondary {
  color: #FFFFFF !important;
}

.btn-square {
  width: 36px;
  height: 36px;
}

.btn-sm-square {
  width: 28px;
  height: 28px;
}

.btn-lg-square {
  width: 46px;
  height: 46px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.back-to-top {
  position: fixed;
  display: none;
  right: 30px;
  bottom: 30px;
  z-index: 11;
  animation: action 1s infinite alternate;
}

@keyframes action {
  0% {
    transform: translateY(0);
  }

  100% {
    transform: translateY(-15px);
  }
}

.navbar-light .navbar-nav .nav-link {
  padding: 30px 15px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #211E1C;
  outline: none;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active {
  color: #F9A392;
}

@media (max-width: 991.98px) {
  .navbar-light .navbar-nav .nav-link {
    padding: 10px 15px;
  }
}

.carousel-indicators li {
  width: 25px;
  height: 25px;
  margin: 0 5px 10px 5px;
  background: transparent;
  border: 1px solid #FFFFFF;
  transition: .5s;
}

.carousel-indicators .active {
  width: 50px;
  background: #FFFFFF;
}

.carousel-caption {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(33, 30, 28, 0.7);
  z-index: 1;
}

.service-item img {
  position: relative;
  margin-top: 20px;
  transition: .5s;
}

.service-item .service-text {
  position: absolute;
  width: 100%;
  height: calc(100% + 86px);
  top: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  background: rgba(33, 30, 28, 0.5);
  transition: .5s;
  z-index: 1;
}

.service-item:hover img {
  margin-top: 0px;
}

.service-item:hover .service-text {
  height: calc(100% + 40px);
}

.bg-pricing {
  background: linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url(../img/carousel-2.jpg), no-repeat center center;
  background-size: cover;
}

.bg-jumbotron {
  background: linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url(../img/jumbo.jpg), no-repeat center center;
  background-size: cover;
}

@media (min-width: 992px) {

  .hours-text,
  .pricing-text,
  .contact-form {
    margin-left: -120px;
  }
}

.team img {
  position: relative;
  z-index: 1;
}

.team .team-text {
  position: relative;
  width: 100%;
  height: 100px;
  top: 0px;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  transition: .5s;
}

.team:hover .team-text {
  top: 100px;
}

.team .team-social {
  position: absolute;
  width: 100%;
  height: 100px;
  top: -100px;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: .5s;
  background-color: black;
}

.team:hover .team-social {
  top: 0;
  background-color: #535C91;
}

.sesion-box {
  background-color: #F1EF99;
  border: 1px solid black;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}




main {
  margin: 20px;
  border-spacing: 10px;
}

.campo {
  border-bottom: 2px solid blue;
  margin-bottom: 30px;
  justify-content: center;
  font-size: 16px;
  text-align: justify;
  padding-bottom: 30px;
  position: relative;
  text-align: justify;
}

.tt {
  color: #211C6A;
}

.input {
  size: 120px;
  margin-right: 80px;
}

.input:hover {
  background-color: #D0ECE7;
}



.nav-item:hover {
  font-size: 18px;
  font-weight: bold;
  color: #FF8911;
  text-decoration: none;
  background-color: #050505;

}

.nav-item {
  text-decoration: none;
}




.rowg1 {
  display: flex;

}




.nota {
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  background-color: #B4D4FF;
  color: black;
}




.horastotal {
  font-size: 24px;
  margin:0px;
  padding: 7px 10px;
  display: flex;
text-align: left;
}

.col {
  margin-right: 3px;
  display: flex;
  padding: 0px;
}


.button-71 {
  background: linear-gradient(82deg, rgba(2, 0, 36, 1) 0%, rgba(37, 56, 156, 1) 32%, rgb(29, 22, 82) 67%, rgb(6, 58, 104) 88%, rgb(12, 13, 13) 100%);
  border: 3px black solid;
  border-radius: 40px;
  color: #fff;
  cursor: pointer;
  display: flex;
  font-family: system-ui, -apple-system, system-ui, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
  font-size: 20px;
  font-weight: 600;
  outline: 2px;
  padding: 5px 8px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin: 25px 15px;
}

.button-71:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

.button-71:hover {
  box-shadow: rgba(21, 21, 17, 0.4) 5px 5px, rgba(67, 61, 65, 0.3) 10px 10px, rgba(33, 28, 31, 0.2) 15px 15px, rgba(18, 14, 17, 0.1) 20px 20px, rgba(162, 213, 21, 0.05) 25px 25px;
  transform: scale(1.05);

}




@media (min-width: 768px) {
  .button-71 {
    padding: 16px 48px;
  }
}

/*----------------login -----------------------------------------------------------*/
form {
  padding: 50px 20px;
  background-color: #381b1b6d;
  backdrop-filter: blur(5px);
  margin-left: 30%;
  margin-right: 30%;
  margin-top: 80px;
  padding-top: 28px;
  margin-bottom: 30px
}

h1 {
  text-align: center;
  padding: 15px;
  color: rgb(9, 6, 6);
}

input {
  width: calc(100% - 20px);
  padding: 19px;
  margin: auto;
  margin-top: 12px;
  font-size: 16px;
  border: 3px solid black;
  box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}

.blanco {
  color: white;
  text-align: center;
  font-size: 30px;
  color: #000000;
}

.boo {
  background-image: url(../img/fondo.jpg);
  width: 100%;
  height: 100%vh;
  background-size: cover;
  color: rgb(83, 5, 5);
}

.login-box {
  background-image: url(../img/fondo.jpg);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

@media only screen and (min-width:360px) and (max-width:757px) {
  form {
    padding: 50px 20px;
    background-color: #381b1b6d;
    backdrop-filter: blur(5px);
    margin-left: 5%;
    margin-right: 5%;
    margin-top: 70px;
    padding-top: 28px;
    margin-bottom: 30px
  }

  input {
    width: calc(100% - 20px);
    padding: 9px;
    margin: auto;
    margin-top: 12px;
    font-size: 16px;
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
  }

  .boo {
    background-image: url(../img/fondo.jpg);
    max-width: 100%;
    max-height: 200%;
    background-attachment: fixed;
    background-repeat: no-repeat;
    color: white;
  }

  @media only screen and (min-width:280px) and (max-width:757px) {
    form {
      padding: 50px 20px;
      background-color: #381b1b6d;
      backdrop-filter: blur(5px);
      margin-left: 5%;
      margin-right: 5%;
      margin-top: 70px;
      padding-top: 28px;
      margin-bottom: 30px
    }

    input {
      width: calc(100% - 20px);
      padding: 9px;
      margin: auto;
      margin-top: 12px;
      font-size: 16px;
      box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    }

    .boo {
      background-image: url(../img/fondo.jpg);
      max-width: 100%;
      max-height: 200%;
      background-attachment: fixed;
      background-repeat: no-repeat;
      color: white;
    }
  }

  @media only screen and (min-width:760px) and (max-width:1180px) {
    form {
      padding: 50px 20px;
      background-color: #381b1b6d;
      backdrop-filter: blur(5px);
      margin-left: 5%;
      margin-right: 5%;
      margin-top: 70px;
      padding-top: 28px;
      margin-bottom: 30px
    }

    input {
      width: calc(100% - 20px);
      padding: 20px;
      margin: auto;
      margin-top: 12px;
      font-size: 16px;
      box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    }

    .boo {
      background-image: url(../img/fondo.jpg);
      max-width: 100%;
      max-height: 200%;
      background-attachment: fixed;
      background-repeat: no-repeat;
      color: white;
    }

    .caja {
      margin-top: 30%;
    }

    header h1 {
      margin-left: 10px;
      align-items: center;
      width: calc(20% - 100px);
      font-family: montez;
      font-size: 80px;
    }
  }
}
/*----------------- login end ------------------------------------------------------------------------------*/
/*------------------------- datos -----------------------------------------*/
.formulario-datos {
  margin: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #757575;
  background-color: #fdf9f9;
}
.contFilas{
  border: 3px solid black;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  display: grid;
  grid-template-rows: repeat(9 auto);
  }
.filaRow1{
  display: flex;
  flex-wrap: wrap;
  }
  .colColuma{
    align-items: center;
  }
 .colColumah{
  font-size: 20px;
  color: #000;
  align-items: center;
  margin: 0px;
  margin-bottom: 20px;
  display: flex;
padding: 0px 5px; 
}
.horasContent{
display: grid;
grid-template-columns: auto auto auto;
margin: 0px auto;
}
 input{
  padding: 30px;
  color: #000;
  margin: 0%;
 }
 select{
  padding: 30px;
  color: #000;
  margin: 0%;
  }
 fieldset{
  color: #000;
  display: flex;
  border-top: solid 4px rgb(27, 20, 20);
  font-size: 25px;
 }
 .leyendaTitulo2{
  color: #000;
  display: flex;
  border: solid 4px rgb(70, 8, 8);
  font-size: 25px;
  background-color: #FFF8DB;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  margin: 5px;
  padding: 5px 0px;
  align-items: center;
 }
 .titulo{
  color:#A04000;
  font-weight: bold;
  display: flex;
  border-top: solid 4px rgb(27, 20, 20);
  font-size: 30px;
  background-color:#E7E6E1;
   }
 .inputg1 {
  text-align: center;
  font-size: 20px;
  margin: 0px 0px;
  border: 2px solid black;
  display: flex;
  padding: 8px 10px;  
  align-items: center;
}

.inputg1:hover {
  font-weight: bold;
  text-align: center;
  background-color: #EADFB4;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}
.fila1{
  margin: 5px 0px;
}
/*----------------- datos iniciales end ------------------------------------------------------------------------------*/
/*------------------------- visualizar -----------------------------------------*/
/*
.principal{
  border: solid 3px #000;
  margin: 8px;
  box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
background-color: #F5ECE7;
}
.h1{
  text-align: center;
  color: #AF2E40 ;
}
.contenedor1{
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
  display: grid;
  grid-template-columns: repeat(4 auto);
  background-color: #FEFFEC;
}
.columan_Tabla{
  display: grid;
  grid-template-columns: auto 3fr 1fr 1fr;
}
.ct2{
  display: grid;
  grid-template-columns: 1fr auto auto auto;
  font-size: 25px;
  border: red 10px solid;
  }
  table{
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  padding: 0px 20px;
  }
  thead{
    font-size: 25px;
  font-weight: bold;
  border: solid 6px #000;
  background-color: #FCFBC8;
   }
   th, td{
    border: #000 solid 3px;
    padding: 5px;
    text-align: center;
    font-size: 20px;
    }
    .AvionHoras{
margin-right: 5px;
padding: 0px;
align-items: first baseline;
    }
    .hactual{
      padding: 2px 5px;
      font-size: 25px;
      text-align: center;
    }
  .btn_visual{
    display: flex;
    padding: 9px auto;
    border: solid 4px black;
    background-color: #99280C;
    color: white;
    font-size: 20px;
    border-radius: 50px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
  }

/*------------------------- visualizar end -----------------------------------------*/
/*------------------------- visualizar2 datos -----------------------------------------*/
/*---------------tabla--------------------*/
.tituloV{
  text-align: center;
  }
.c130{
  font-size: 100px;
  font-weight: 600;
  
  color: rgb(255, 165, 0);
  text-shadow: 10px -2px 9px black; 
}
.cont-principal{
display: grid;
grid-template-columns: repeat(4, auto);
background-color:rgb(225, 224, 224);
}
.cont-hijo{
  column-gap: 20px;
}
.outer-wrapper {
  margin: 10px;
  margin-left: 20px;
  margin-right: 20px;
  border: 1px solid black;
  border-radius: 4px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.9);
  max-width: fit-content;
  max-height: fit-content;
}
.table-wrapper {
  overflow-y: scroll;
height: 40vh;
  max-height: 66.4vh;
 margin-top: 22px;
  margin: 15px;
  padding-bottom: 20px;
 }
table {
min-width: max-content;
border-collapse: separate;
border-spacing: 0px;    
}
table th{
position: sticky; 
top: 0px;
background-color: #133b5c;
color: rgb(241, 245, 179);
text-align: center;
font-weight: normal;
font-size: 18px;
outline: 0.7px solid black;
border: 1.5px solid black;
} 
table th, table td {
  padding: 15px;
  padding-top: 10px;
  padding-bottom: 10px;
}

table td {
  text-align: left;
  font-size: 19px;
  border: 1px solid rgb(177, 177, 177);
  padding-left: 20px;
}
.botonEFH{
  padding: 20px 130px;
  background-color: beige;
  margin-top: 30px;
  font-size: 20px;
  font-weight: bold;
  border-radius: 20px;
  box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}
.botonEFH:hover{
background-color: orange;
}
.cont-hijo{
  margin: 10px; 
  background-color:rgb(227, 217, 217);
  box-shadow: rgba(24, 14, 14, 0.50) 0px 15px 25px, rgba(0, 0, 0, 0.50) 0px 5px 10px;
}
.entrada{
padding: 20px 10px;
font-size: 30px;
text-align: center;
}