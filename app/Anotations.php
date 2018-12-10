<?php
/**
 * @SWG\Swagger(
 *     basePath="",
 *     schemes={"http", "https"},
 *     host=L5_SWAGGER_CONST_HOST,
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Authentication  API",
 *         description="L5 Swagger Authentication API description",
 *         @SWG\Contact(
 *             email="arditdev@gmail.com"
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
 *     description="Register to the authentication api",
 *     @SWG\Parameter(
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
 *    @SWG\Parameter(
 *         name="age",
 *         in="query",
 *         type="integer",
 *         description="Your age",
 *         default="19",
 *         required=true,
 *     ),
 *    @SWG\Parameter(
 *         name="description",
 *         in="query",
 *         type="string",
 *         description="A brief description of your profile",
 *         default="I am an animal lover",
 *         required=true,
 *     ),
 *     @SWG\Parameter(
 *         name="email",
 *         in="query",
 *         type="string",
 *         description="Your email address",
 *         default="admin@gmail.com",
 *         required=true,
 *     ),
 *   @SWG\Parameter(
 *         name="password",
 *         in="query",
 *         type="string",
 *         description="Your password",
 *         required=true,
 *     ),
 *    @SWG\Parameter(
 *         name="profile_picture",
 *         in="formData",
 *         type="file",
 *         description="Select file",
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
 *     description="Login using your credentials in order to receive the access and refresh token",
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