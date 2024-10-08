<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1\Runnable;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container runnable.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.Runnable.Container</code>
 */
class Container extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI to pull the container image from.
     *
     * Generated from protobuf field <code>string image_uri = 1;</code>
     */
    protected $image_uri = '';
    /**
     * Required for some container images. Overrides the `CMD` specified in the
     * container. If there is an `ENTRYPOINT` (either in the container image or
     * with the `entrypoint` field below) then these commands are appended as
     * arguments to the `ENTRYPOINT`.
     *
     * Generated from protobuf field <code>repeated string commands = 2;</code>
     */
    private $commands;
    /**
     * Required for some container images. Overrides the `ENTRYPOINT` specified
     * in the container.
     *
     * Generated from protobuf field <code>string entrypoint = 3;</code>
     */
    protected $entrypoint = '';
    /**
     * Volumes to mount (bind mount) from the host machine files or directories
     * into the container, formatted to match `--volume` option for the
     * `docker run` command&mdash;for example, `/foo:/bar` or `/foo:/bar:ro`.
     * If the `TaskSpec.Volumes` field is specified but this field is not, Batch
     * will mount each volume from the host machine to the container with the
     * same mount path by default. In this case, the default mount option for
     * containers will be read-only (`ro`) for existing persistent disks and
     * read-write (`rw`) for other volume types, regardless of the original
     * mount options specified in `TaskSpec.Volumes`. If you need different
     * mount settings, you can explicitly configure them in this field.
     *
     * Generated from protobuf field <code>repeated string volumes = 7;</code>
     */
    private $volumes;
    /**
     * Required for some container images. Arbitrary additional options to
     * include in the `docker run` command when running this container&mdash;for
     * example, `--network host`. For the `--volume` option, use the `volumes`
     * field for the container.
     *
     * Generated from protobuf field <code>string options = 8;</code>
     */
    protected $options = '';
    /**
     * If set to true, external network access to and from container will be
     * blocked, containers that are with block_external_network as true can
     * still communicate with each other, network cannot be specified in the
     * `container.options` field.
     *
     * Generated from protobuf field <code>bool block_external_network = 9;</code>
     */
    protected $block_external_network = false;
    /**
     * Required if the container image is from a private Docker registry. The
     * username to login to the Docker registry that contains the image.
     * You can either specify the username directly by using plain text or
     * specify an encrypted username by using a Secret Manager secret:
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`. However, using a secret is
     * recommended for enhanced security.
     * Caution: If you specify the username using plain text, you risk the
     * username being exposed to any users who can view the job or its logs.
     * To avoid this risk, specify a secret that contains the username instead.
     * Learn more about [Secret
     * Manager](https://cloud.google.com/secret-manager/docs/) and [using
     * Secret Manager with
     * Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *
     * Generated from protobuf field <code>string username = 10;</code>
     */
    protected $username = '';
    /**
     * Required if the container image is from a private Docker registry. The
     * password to login to the Docker registry that contains the image.
     * For security, it is strongly recommended to specify an
     * encrypted password by using a Secret Manager secret:
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * Warning: If you specify the password using plain text, you risk the
     * password being exposed to any users who can view the job or its logs.
     * To avoid this risk, specify a secret that contains the password instead.
     * Learn more about [Secret
     * Manager](https://cloud.google.com/secret-manager/docs/) and [using
     * Secret Manager with
     * Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *
     * Generated from protobuf field <code>string password = 11;</code>
     */
    protected $password = '';
    /**
     * Optional. If set to true, this container runnable uses Image streaming.
     * Use Image streaming to allow the runnable to initialize without
     * waiting for the entire container image to download, which can
     * significantly reduce startup time for large container images.
     * When `enableImageStreaming` is set to true, the container
     * runtime is [containerd](https://containerd.io/) instead of Docker.
     * Additionally, this container runnable only supports the following
     * `container` subfields: `imageUri`,
     * `commands[]`, `entrypoint`, and
     * `volumes[]`; any other `container` subfields are ignored.
     * For more information about the requirements and limitations for using
     * Image streaming with Batch, see the [`image-streaming`
     * sample on
     * GitHub](https://github.com/GoogleCloudPlatform/batch-samples/tree/main/api-samples/image-streaming).
     *
     * Generated from protobuf field <code>bool enable_image_streaming = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_image_streaming = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image_uri
     *           Required. The URI to pull the container image from.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $commands
     *           Required for some container images. Overrides the `CMD` specified in the
     *           container. If there is an `ENTRYPOINT` (either in the container image or
     *           with the `entrypoint` field below) then these commands are appended as
     *           arguments to the `ENTRYPOINT`.
     *     @type string $entrypoint
     *           Required for some container images. Overrides the `ENTRYPOINT` specified
     *           in the container.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $volumes
     *           Volumes to mount (bind mount) from the host machine files or directories
     *           into the container, formatted to match `--volume` option for the
     *           `docker run` command&mdash;for example, `/foo:/bar` or `/foo:/bar:ro`.
     *           If the `TaskSpec.Volumes` field is specified but this field is not, Batch
     *           will mount each volume from the host machine to the container with the
     *           same mount path by default. In this case, the default mount option for
     *           containers will be read-only (`ro`) for existing persistent disks and
     *           read-write (`rw`) for other volume types, regardless of the original
     *           mount options specified in `TaskSpec.Volumes`. If you need different
     *           mount settings, you can explicitly configure them in this field.
     *     @type string $options
     *           Required for some container images. Arbitrary additional options to
     *           include in the `docker run` command when running this container&mdash;for
     *           example, `--network host`. For the `--volume` option, use the `volumes`
     *           field for the container.
     *     @type bool $block_external_network
     *           If set to true, external network access to and from container will be
     *           blocked, containers that are with block_external_network as true can
     *           still communicate with each other, network cannot be specified in the
     *           `container.options` field.
     *     @type string $username
     *           Required if the container image is from a private Docker registry. The
     *           username to login to the Docker registry that contains the image.
     *           You can either specify the username directly by using plain text or
     *           specify an encrypted username by using a Secret Manager secret:
     *           `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`. However, using a secret is
     *           recommended for enhanced security.
     *           Caution: If you specify the username using plain text, you risk the
     *           username being exposed to any users who can view the job or its logs.
     *           To avoid this risk, specify a secret that contains the username instead.
     *           Learn more about [Secret
     *           Manager](https://cloud.google.com/secret-manager/docs/) and [using
     *           Secret Manager with
     *           Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *     @type string $password
     *           Required if the container image is from a private Docker registry. The
     *           password to login to the Docker registry that contains the image.
     *           For security, it is strongly recommended to specify an
     *           encrypted password by using a Secret Manager secret:
     *           `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *           Warning: If you specify the password using plain text, you risk the
     *           password being exposed to any users who can view the job or its logs.
     *           To avoid this risk, specify a secret that contains the password instead.
     *           Learn more about [Secret
     *           Manager](https://cloud.google.com/secret-manager/docs/) and [using
     *           Secret Manager with
     *           Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *     @type bool $enable_image_streaming
     *           Optional. If set to true, this container runnable uses Image streaming.
     *           Use Image streaming to allow the runnable to initialize without
     *           waiting for the entire container image to download, which can
     *           significantly reduce startup time for large container images.
     *           When `enableImageStreaming` is set to true, the container
     *           runtime is [containerd](https://containerd.io/) instead of Docker.
     *           Additionally, this container runnable only supports the following
     *           `container` subfields: `imageUri`,
     *           `commands[]`, `entrypoint`, and
     *           `volumes[]`; any other `container` subfields are ignored.
     *           For more information about the requirements and limitations for using
     *           Image streaming with Batch, see the [`image-streaming`
     *           sample on
     *           GitHub](https://github.com/GoogleCloudPlatform/batch-samples/tree/main/api-samples/image-streaming).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI to pull the container image from.
     *
     * Generated from protobuf field <code>string image_uri = 1;</code>
     * @return string
     */
    public function getImageUri()
    {
        return $this->image_uri;
    }

    /**
     * Required. The URI to pull the container image from.
     *
     * Generated from protobuf field <code>string image_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_uri = $var;

        return $this;
    }

    /**
     * Required for some container images. Overrides the `CMD` specified in the
     * container. If there is an `ENTRYPOINT` (either in the container image or
     * with the `entrypoint` field below) then these commands are appended as
     * arguments to the `ENTRYPOINT`.
     *
     * Generated from protobuf field <code>repeated string commands = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Required for some container images. Overrides the `CMD` specified in the
     * container. If there is an `ENTRYPOINT` (either in the container image or
     * with the `entrypoint` field below) then these commands are appended as
     * arguments to the `ENTRYPOINT`.
     *
     * Generated from protobuf field <code>repeated string commands = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->commands = $arr;

        return $this;
    }

    /**
     * Required for some container images. Overrides the `ENTRYPOINT` specified
     * in the container.
     *
     * Generated from protobuf field <code>string entrypoint = 3;</code>
     * @return string
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * Required for some container images. Overrides the `ENTRYPOINT` specified
     * in the container.
     *
     * Generated from protobuf field <code>string entrypoint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEntrypoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entrypoint = $var;

        return $this;
    }

    /**
     * Volumes to mount (bind mount) from the host machine files or directories
     * into the container, formatted to match `--volume` option for the
     * `docker run` command&mdash;for example, `/foo:/bar` or `/foo:/bar:ro`.
     * If the `TaskSpec.Volumes` field is specified but this field is not, Batch
     * will mount each volume from the host machine to the container with the
     * same mount path by default. In this case, the default mount option for
     * containers will be read-only (`ro`) for existing persistent disks and
     * read-write (`rw`) for other volume types, regardless of the original
     * mount options specified in `TaskSpec.Volumes`. If you need different
     * mount settings, you can explicitly configure them in this field.
     *
     * Generated from protobuf field <code>repeated string volumes = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * Volumes to mount (bind mount) from the host machine files or directories
     * into the container, formatted to match `--volume` option for the
     * `docker run` command&mdash;for example, `/foo:/bar` or `/foo:/bar:ro`.
     * If the `TaskSpec.Volumes` field is specified but this field is not, Batch
     * will mount each volume from the host machine to the container with the
     * same mount path by default. In this case, the default mount option for
     * containers will be read-only (`ro`) for existing persistent disks and
     * read-write (`rw`) for other volume types, regardless of the original
     * mount options specified in `TaskSpec.Volumes`. If you need different
     * mount settings, you can explicitly configure them in this field.
     *
     * Generated from protobuf field <code>repeated string volumes = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->volumes = $arr;

        return $this;
    }

    /**
     * Required for some container images. Arbitrary additional options to
     * include in the `docker run` command when running this container&mdash;for
     * example, `--network host`. For the `--volume` option, use the `volumes`
     * field for the container.
     *
     * Generated from protobuf field <code>string options = 8;</code>
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Required for some container images. Arbitrary additional options to
     * include in the `docker run` command when running this container&mdash;for
     * example, `--network host`. For the `--volume` option, use the `volumes`
     * field for the container.
     *
     * Generated from protobuf field <code>string options = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkString($var, True);
        $this->options = $var;

        return $this;
    }

    /**
     * If set to true, external network access to and from container will be
     * blocked, containers that are with block_external_network as true can
     * still communicate with each other, network cannot be specified in the
     * `container.options` field.
     *
     * Generated from protobuf field <code>bool block_external_network = 9;</code>
     * @return bool
     */
    public function getBlockExternalNetwork()
    {
        return $this->block_external_network;
    }

    /**
     * If set to true, external network access to and from container will be
     * blocked, containers that are with block_external_network as true can
     * still communicate with each other, network cannot be specified in the
     * `container.options` field.
     *
     * Generated from protobuf field <code>bool block_external_network = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setBlockExternalNetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->block_external_network = $var;

        return $this;
    }

    /**
     * Required if the container image is from a private Docker registry. The
     * username to login to the Docker registry that contains the image.
     * You can either specify the username directly by using plain text or
     * specify an encrypted username by using a Secret Manager secret:
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`. However, using a secret is
     * recommended for enhanced security.
     * Caution: If you specify the username using plain text, you risk the
     * username being exposed to any users who can view the job or its logs.
     * To avoid this risk, specify a secret that contains the username instead.
     * Learn more about [Secret
     * Manager](https://cloud.google.com/secret-manager/docs/) and [using
     * Secret Manager with
     * Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *
     * Generated from protobuf field <code>string username = 10;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required if the container image is from a private Docker registry. The
     * username to login to the Docker registry that contains the image.
     * You can either specify the username directly by using plain text or
     * specify an encrypted username by using a Secret Manager secret:
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`. However, using a secret is
     * recommended for enhanced security.
     * Caution: If you specify the username using plain text, you risk the
     * username being exposed to any users who can view the job or its logs.
     * To avoid this risk, specify a secret that contains the username instead.
     * Learn more about [Secret
     * Manager](https://cloud.google.com/secret-manager/docs/) and [using
     * Secret Manager with
     * Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *
     * Generated from protobuf field <code>string username = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Required if the container image is from a private Docker registry. The
     * password to login to the Docker registry that contains the image.
     * For security, it is strongly recommended to specify an
     * encrypted password by using a Secret Manager secret:
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * Warning: If you specify the password using plain text, you risk the
     * password being exposed to any users who can view the job or its logs.
     * To avoid this risk, specify a secret that contains the password instead.
     * Learn more about [Secret
     * Manager](https://cloud.google.com/secret-manager/docs/) and [using
     * Secret Manager with
     * Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *
     * Generated from protobuf field <code>string password = 11;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Required if the container image is from a private Docker registry. The
     * password to login to the Docker registry that contains the image.
     * For security, it is strongly recommended to specify an
     * encrypted password by using a Secret Manager secret:
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * Warning: If you specify the password using plain text, you risk the
     * password being exposed to any users who can view the job or its logs.
     * To avoid this risk, specify a secret that contains the password instead.
     * Learn more about [Secret
     * Manager](https://cloud.google.com/secret-manager/docs/) and [using
     * Secret Manager with
     * Batch](https://cloud.google.com/batch/docs/create-run-job-secret-manager).
     *
     * Generated from protobuf field <code>string password = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Optional. If set to true, this container runnable uses Image streaming.
     * Use Image streaming to allow the runnable to initialize without
     * waiting for the entire container image to download, which can
     * significantly reduce startup time for large container images.
     * When `enableImageStreaming` is set to true, the container
     * runtime is [containerd](https://containerd.io/) instead of Docker.
     * Additionally, this container runnable only supports the following
     * `container` subfields: `imageUri`,
     * `commands[]`, `entrypoint`, and
     * `volumes[]`; any other `container` subfields are ignored.
     * For more information about the requirements and limitations for using
     * Image streaming with Batch, see the [`image-streaming`
     * sample on
     * GitHub](https://github.com/GoogleCloudPlatform/batch-samples/tree/main/api-samples/image-streaming).
     *
     * Generated from protobuf field <code>bool enable_image_streaming = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableImageStreaming()
    {
        return $this->enable_image_streaming;
    }

    /**
     * Optional. If set to true, this container runnable uses Image streaming.
     * Use Image streaming to allow the runnable to initialize without
     * waiting for the entire container image to download, which can
     * significantly reduce startup time for large container images.
     * When `enableImageStreaming` is set to true, the container
     * runtime is [containerd](https://containerd.io/) instead of Docker.
     * Additionally, this container runnable only supports the following
     * `container` subfields: `imageUri`,
     * `commands[]`, `entrypoint`, and
     * `volumes[]`; any other `container` subfields are ignored.
     * For more information about the requirements and limitations for using
     * Image streaming with Batch, see the [`image-streaming`
     * sample on
     * GitHub](https://github.com/GoogleCloudPlatform/batch-samples/tree/main/api-samples/image-streaming).
     *
     * Generated from protobuf field <code>bool enable_image_streaming = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableImageStreaming($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_image_streaming = $var;

        return $this;
    }

}


