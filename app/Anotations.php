<?php
/**
 * @SWG\Swagger(
 *     basePath="",
 *     schemes={"http", "https"},
 *     host=L5_SWAGGER_CONST_HOST,
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="L5 Swagger API",
 *         description="L5 Swagger API description",
 *         @SWG\Contact(
 *             email="darius@matulionis.lt"
 *         ),
 *     )
 * )
 */
/**
 * @SWG\SecurityScheme(
 *   securityDefinition="passport",
 *   type="oauth2",
 *   tokenUrl="/oauth/token",
 *   flow="password",
 *   scopes={}
 * )
 */
/**
 * @SWG\Post(
 *     path="/api/register",
 *     tags={"Authentication"},
 *     description="Register",
 *    @SWG\Parameter(
 *         name="email",
 *         in="query",
 *         type="string",
 *         description="Your email address",
 *         default="admin@gmail.com",
 *         required=true,
 *     ),
 *      @SWG\Parameter(
 *         name="first_name",
 *         in="query",
 *         type="string",
 *         description="Your first name",
 *         default="John",
 *         required=true,
 *     ),
 *    @SWG\Parameter(
 *         name="last_name",
 *         in="query",
 *         type="string",
 *         description="Your last name",
 *         default="Doe",
 *         required=true,
 *     ),
 *   @SWG\Parameter(
 *         name="password",
 *         in="query",
 *         type="string",
 *         description="Your password",
 *         required=true,
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @SWG\Response(
 *         response=422,
 *         description="Missing Data"
 *     )
 * )
 *
 */

/**
 * @SWG\Post(
 *     path="/oauth/token",
 *     tags={"Authentication"},
 *     description="Register",
 *     consumes={"application/x-www-form-urlencoded"},
 *    @SWG\Parameter(
 *         name="grant_type",
 *         in="formData",
 *         type="string",
 *         default="password",
 *         description="Grant Type",
 *         required=true,
 *     ),
 *     @SWG\Parameter(
 *         name="client_id",
 *         in="formData",
 *         type="string",
 *         description="Client ID",
 *         default="1",
 *         required=true,
 *     ),
 *      @SWG\Parameter(
 *         name="client_secret",
 *         in="formData",
 *         type="string",
 *         description="Client Secret",
 *         default="test",
 *         required=true,
 *     ),
 *    @SWG\Parameter(
 *         name="username",
 *         in="formData",
 *         type="string",
 *         description="Your email address",
 *         default="admin@gmail.com",
 *         required=true,
 *     ),
 *   @SWG\Parameter(
 *         name="password",
 *         in="formData",
 *         type="string",
 *         description="Your password",
 *         required=true,
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="OK",
 *     ),
 *     @SWG\Response(
 *         response=422,
 *         description="Missing Data"
 *     )
 * )
 *
 */