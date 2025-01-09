import axios from "axios";
import { SampleData } from "@/Types/SampleTypes";
import { route } from "ziggy-js";

export class SampleRepository {
    async fetchSampleData(): Promise<SampleData[]> {
        const response = await axios.get(route("api.sample"));
        console.log(response);
        return response.data.samples;
    }
}